<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('cover_letter')) {
            $cover_letter = $request->file('cover_letter');
            $cover_lettername = $cover_letter->getClientOriginalName();
            $folder = uniqid().'-'.now()->timestamp;
            $cover_letter->storeAs('cover_letters/'.$folder, $cover_lettername);

            return $folder;
        }

        return '';
    }
}
