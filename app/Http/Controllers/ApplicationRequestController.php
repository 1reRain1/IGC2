<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\applicant;

class ApplicationRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('certificateForm');
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
        $validatedData = $request->validate([
            'FullName' => 'required:255',
            'PlaceOfBirth' => 'required:255',
            'DateOfBirth' => 'required|date|before:today',
            'PhoneNumber' => 'required|numeric', // Assuming phone numbers contain only numbers
            'Email' => 'required|email|unique:users,email|max:255', // Replace 'users' with your actual users table name
            'SkillName' => 'required:255',
            'CV' => 'required|file|mimes:pdf|max:2048' // Only PDF and max 2MB size
        ]);

        $newRequest = applicant::create($validatedData);

        return redirect()->route('ApplicationRequestView');
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
