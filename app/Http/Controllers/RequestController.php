<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests; 
use App\Models\User; 
use App\Mail\NewRequestNotification;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    public function index(){
      
        $requests = Requests::where('status', 'Open')->get(); 

        return view('admin.admin-requests', compact('requests'));
    }


    public function store(Request $request){
        $validated = $request->validate([
            'representative_name' => 'required|string',
            'event_name' => 'required|string',
            'purpose' => 'required|string',
            'other_purpose' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'setup_date' => 'nullable|date',
            'setup_time' => 'nullable',
            'location' => 'required|string',
        ]);

        $requestedBy = auth()->id(); 
        $user = User::find($requestedBy);
        $userName = $user ? $user->name : 'Unknown User'; 

        Requests::create([
            'representative_name' => $validated['representative_name'], 
            'event_name' => $validated['event_name'],
            'purpose' => $validated['purpose'],
            'other_purpose' => $validated['other_purpose'] ?? null,
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'setup_date' => $validated['setup_date'] ?? null,
            'setup_time' => $validated['setup_time'] ?? null,
            'location' => $validated['location'],
            'requested_by' => $requestedBy, 
            'status' => 'Open',
        ]);

        $requestData = $validated;
        $requestData['requested_by'] = $userName;

        //change this to nocs_services@gbox.adnu.edu.ph
        Mail::to('mcadag@gbox.adnu.edu.ph')->send(new NewRequestNotification($requestData));

        return redirect()->back()->with('success', 'Request submitted successfully!');
    }

}
