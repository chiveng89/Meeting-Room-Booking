<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panolroom;

class RoomController extends Controller
{
    // public function index()
    // {
    //     $panols = Panolroom::all();
    //     return view('frontend.room-detial', compact('panols'));
    // }

    public function store(Request $request)
    {
        $request->validate([
            'staff_name' => 'required|string|max:255',
            'staff_id' => 'required|string',
            'staff_department' => 'required|string',
            'room' => 'required|string',
            'meeting_type' => 'required|in:meeting,training',
            'description' => 'nullable|string|max:500',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        Panolroom::create($request->all());

        return redirect()->back()->with('success', 'Booking created successfully!');
    }

    public function room()
    {
        return view('frontend.room-detial');
    }
}
