<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function store(StoreApplicationRequest $request)
    {
        $application = new Application();
        $application->internship_id = $request->internship_id;
        $application->name = $request->name;
        $application->email = $request->email;
        $application->phone = $request->phone;
        $application->interview_date = now()->addWeeks(2);

        $application->addMedia(storage_path('app/public/cover_letters/tmp/'.$request->cover_letter))->toMediaCollection('cover_letter');
        $application->save();
    }
}
