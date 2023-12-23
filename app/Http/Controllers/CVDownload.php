<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class CVDownload extends Controller
{
    public function show($filename){
        if (Storage::disk('cvs')->exists($filename)) {
            $fileContent = Storage::disk('cvs')->get($filename);
            $mimeType = Storage::disk('cvs')->mimeType($filename);

            return Response::make($fileContent, 200, [
                'Content-Type' => $mimeType,
                'Content-Disposition' => 'attachment; filename="' . $filename . '"'
            ]);
        }

        // If the file does not exist, return a 404 response
        abort(404, 'File not found.');
        }

    }

