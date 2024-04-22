<?php

namespace App\Http\Controllers;

use App\Models\Connections;
use App\Models\userContacts;
use Illuminate\Http\Request;

class userContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Assuming authentication is required for profile1 page
       // $this->displayProfile1(); // Call the displayProfile1 method automatically
    }  

    public function sendContact(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'phone_number' => 'nullable|string',
            'instagram' => 'nullable|string',
            'linkedIn'=> 'nullable|string',
            'tiktok'=>'nullable|string'
        ]);
    
        // Get the authenticated user's ID
        $userId = auth()->id();
    
        // Fetch all connections for the authenticated user
        $connections = Connections::where('user_id', $userId)
            ->where('state', true)
            ->get();
    
        // Loop through each connection and create a separate UserContact record
        foreach ($connections as $connection) {
            $userContact = new UserContacts();
            $userContact->user_id = $userId; // Authenticated user's ID
            $userContact->connection_id = $connection->connection_id; // Connection's ID
            $userContact->phone_number = $validatedData['phone_number'];
            $userContact->instagram = $validatedData['instagram'];
            $userContact->tiktok = $validatedData['tiktok'];
            $userContact->linkedIn = $validatedData['linkedIn'];
            $userContact->state = $connection->state; // Set the state from the connection
            $userContact->sent = true; // Marking the contact as sent
            $userContact->save();
        }
    
        // Optionally, redirect back with a success message
        return redirect()->back()->with('success', 'Contact information sent successfully!');
    }


}
