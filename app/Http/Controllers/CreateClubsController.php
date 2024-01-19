<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CreateClubsController extends Controller
{

    /**
     * Display a club creation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function addclub()
    {
        return view('auth.add-club');
    }

    /**
     * Store a new club.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createclub(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'short_form' => 'required|string|max:250|unique:clubs',
            'rating' => 'required|string|max:250|unique:clubs',
            'email' => 'required|email|max:250|unique:clubs',
            'contact' => 'required|string|max:250|unique:clubs',
            'members' => 'required|string|max:250|unique:clubs',
            'upcoming_programs' => 'required|string|max:250|unique:clubs',
            'ongoing_programs' => 'required|string|max:250|unique:clubs',
            'club_description'=>'required|string|max:250|unique:clubs',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect()->route('dashboard')
        ->withSuccess('You have successfully created a club!');
    }
    public function create(array $data){
        Club::create([
            'name' => $data['name'],
            'short_form' => $data['short_form'],
            'rating' => $data['rating'],
            'email' => $data['email'],
            'members' => $data['members'],
            'upcoming_programs' => $data['upcoming_programs'],
            'ongoing_programs' => $data['ongoing_programs'],
            'club_description'->$data['club_description']
        ]);
    }


    }



