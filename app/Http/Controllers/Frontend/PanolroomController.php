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
            'staff_name' => 'required|string|max:255',
            'staff_id' => 'required|string|max:255',
            'staff_department' => 'required|string',
            'room' => 'required|string',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'meeting_type' => 'required|in:meeting,training',
            'description' => 'nullable|string'
        ]);

        return redirect()->back()->with('success', 'Booking created successfully.');
    }
    public function room()
    {
        return view('frontend.room-detial');
                        
    }
}
