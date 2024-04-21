<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait MediaUploadingTrait
{
    public function storeMedia(Request $request)
    {
        if ($request->hasFile('resume')) {
            $resume = $request->file('resume');
            $fileName = $resume->getClientOriginalName();
            $folder = uniqid().'-'.now()->timestamp;
            $resume->storeAs('public/resume', $folder, $fileName);

            return $folder;
        }

        return 'Loop hole';
    }
}
