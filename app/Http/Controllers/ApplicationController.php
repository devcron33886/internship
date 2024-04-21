<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreApplicationRequest;
use App\Models\Application;

class ApplicationController extends Controller
{
    use MediaUploadingTrait;

    public function store(StoreApplicationRequest $request)
    {
        $application = Application::create($request->validated());

        if ($request->hasFile('resume')) {
            $application->addMedia($request->file('resume'))->toMediaCollection('resume');
        }

        return redirect()->route('welcome')->with('success', 'Application submitted successfully.');
    }
}
