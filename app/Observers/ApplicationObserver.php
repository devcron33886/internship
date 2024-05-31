<?php

namespace App\Observers;

use App\Models\Application;
use App\Models\User;
use App\Notifications\ApplicationNotification;

class ApplicationObserver
{
    public function created(Application $application)
    {
        User::all()->each(function ($user) use ($application) {
            $user->notify(new ApplicationNotification($application));
        });
    }
}
