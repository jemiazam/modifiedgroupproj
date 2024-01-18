<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function index()
    {
        // Retrieve friends data from the database or any other source
        $friends = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
            ],
            // Add more friend data as needed
        ];

        // Pass the friends data to the view
        return view('friends', compact('friends'));
    }
}
