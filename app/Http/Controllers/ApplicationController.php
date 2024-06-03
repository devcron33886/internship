<?php

namespace App\Http\Controllers;

use App\Models\Application;

class ApplicationController extends Controller {
	public function show(Application $application) {
		return view('applications.show', ['application' => $application]);
	}

}
