<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class CVDownloadController extends Controller
{
    public function download(Request $request, $filename)
    {
        $disk = 'cvs'; // Make sure this is the correct disk name in your filesystems configuration

        // 'root' in filesystems is already 'app/cvs', no need to specify it again in the path
        if (!Storage::disk($disk)->exists($filename)) {
            abort(404); // File not found
        }

        // Storage::download automatically sets the correct headers for file download
        return Storage::disk($disk)->download($filename);    
    }
}

