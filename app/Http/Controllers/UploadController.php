<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('cover_letter') && $request->hasFile('resume')) {
            $coverLetterFile = $request->file('cover_letter');
            $coverLetterFilename = $coverLetterFile->getClientOriginalName();
            $coverLetterFolder = uniqid().'-'.now()->timestamp;
            $coverLetterFile->storeAs('cover_letters/', $coverLetterFolder.'/'.$coverLetterFilename, 'public');

            $resumeFile = $request->file('resume');
            $resumeFilename = $resumeFile->getClientOriginalName();
            $resumeFolder = uniqid().'-'.now()->timestamp;
            $resumeFile->storeAs('resumes/', $resumeFolder.'/'.$resumeFilename, 'public');

            return [
                'cover_letter_folder' => $coverLetterFolder,
                'resume_folder' => $resumeFolder,
            ];
        }

        return 'fail';
    }
}
