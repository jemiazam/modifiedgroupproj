<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use Illuminate\Support\Facades\Auth;

class ClubsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::orderBy('name')->get();
        return view ('main-club')->with(['clubs'=>$clubs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;

        // Retrieve the existing member_list value from the database
        $existingMemberList = Club::where('id', $request->input('club_id'))->value('member_list');

        // Convert the existing value to an array or create an empty array if it's null
        $memberList = json_decode($existingMemberList, true) ?? [];

        // Add the new user ID to the array if it doesn't already exist
        if (!in_array($id, $memberList)) {
            $memberList[] = $id;
        }

        // Save the updated array back to the database
        Club::where('id', $request->input('club_id'))->update(['member_list' => json_encode($memberList)]);

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
