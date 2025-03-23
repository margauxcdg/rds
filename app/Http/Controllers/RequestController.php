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

    public function userRequest(Request $request) {
        $userId = auth()->id(); 
    
        $status = $request->query('status');
    
        $query = Requests::where('requested_by', $userId);
    
        if ($status) {
            $query->where('status', $status);
        }
    
        $requests = $query->get(); 
    
        return view('request', compact('requests'));
    }
    

    public function show($id) {
        $request = Requests::findOrFail($id); 
        return view('admin.request-details', compact('request')); 
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
            'users' => 'required|integer'
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
            'users' => $validated['users'],
            'requested_by' => $req, 
            'status' => 'Open',
        ]);

        $requestData = $validated;
        $requestData['requested_by'] = $userName;

        //change this to nocs_services@gbox.adnu.edu.ph
        Mail::to('mcadag@gbox.adnu.edu.ph')->send(new NewRequestNotification($requestData));

        return redirect()->back()->with('success', 'Request submitted successfully!');
    }

}
