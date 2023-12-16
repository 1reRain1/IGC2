<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use Illuminate\Support\Facades\Storage;


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

        if ($request->hasFile('CV')) {
            // Use the 'cvs' disk to store the file securely
            $cvPath = $request->file('CV')->store('', 'cvs'); // We set the directory to an empty string because the 'cvs' disk is already rooted at the CVs folder
    
            // Add the path to the CV in the validated data
            $validatedData['CV'] = $cvPath; // This stores the file path relative to the disk's root
        }

        $newRequest = Applicant::create($validatedData);

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
