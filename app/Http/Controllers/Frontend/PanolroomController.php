<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panol;
class PanolroomController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'room' => 'required|string|max:255',
            'staff_name' => 'required|string|max:255',
            'staff_id' => 'required|string|max:255',
            'staff_department' => 'required|in:IT,Account,Marketing',
            'meeting_type' => 'required|in:meeting,training',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
        ]);
        $conflict = Panol::where('room', $request->input('room'))
        ->where('date', $request->input('date'))
        ->where(function($query) use ($request) {
            $query->whereBetween('start_time', [$request->input('start_time'), $request->input('end_time')])
                  ->orWhereBetween('end_time', [$request->input('start_time'), $request->input('end_time')])
                  ->orWhere(function ($query) use ($request) {
                      $query->where('start_time', '<=', $request->input('start_time'))
                            ->where('end_time', '>=', $request->input('end_time'));
                  });
        })
        ->exists();

    if ($conflict) {
        // Return to the previous page with an error message if a conflict exists
        return redirect()->back()->with('error', 'This room is already booked at the selected time.');
    }
        Panol::create([
            'room' => $request->input('room'),
            'staff_name' => $request->input('staff_name'),
            'staff_id' => $request->input('staff_id'),
            'staff_department' => $request->input('staff_department'),
            'meeting_type' => $request->input('meeting_type'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),

        ]);
        return redirect()->back()->with('success', 'Room booking saved successfully.');
    }

    public function table(){
        $panols = Panol::all();
        return view('frontend.room-detial', compact('panols'));

    }
    // public function show($id){
    //     $show = panol::findorFail($id);
    //     return response() -> json($show);
    // }

    public function room()
    {
        return view('frontend.room-detial');

    }
}
