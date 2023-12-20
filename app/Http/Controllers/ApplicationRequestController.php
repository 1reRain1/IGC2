<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicantsTemporary;
use App\Models\Applicant;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\CertificateRequestMail;
use Illuminate\Support\Str;
use App\Mail\igcMail;


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
        $token = Str::random(60);

        $validatedData['confirmation_token'] = $token;
        $validatedData['email_token'] = $token;

        $newRequest = applicantstemporary::create($validatedData);

        Mail::to($validatedData['Email'])->send(new igcMail($token));

         return redirect()->route('ApplicationRequestView')->with(
        'status', 'Thank you for your submission. Please check your email to confirm.'
    );

    }

    public function confirm($token)
{
    // Find the entry in the temporary table using the token
    $ApplicantsTemporary = ApplicantsTemporary::where('confirmation_token', $token)->firstOrFail();
    
    // Move the data to the main `applicants` table
    $applicantData = $ApplicantsTemporary->toArray();
    unset($applicantData['id'], $applicantData['confirmation_token']); // Do not transfer the id or token
    $applicant = Applicant::create($applicantData);
    
    // Delete the temporary record
    $ApplicantsTemporary->delete();

    // Redirect with a success message
    return redirect()->route('ApplicationRequestView')->with('status', 'Your application has been confirmed!');
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
