<?php

namespace App\Traits;

trait DownloadFile
{
    public function download()
    {
        $path = public_path('store/IFATSEA Africa Region Meeting.pdf');

        if (! file_exists($path)) {
            abort(404);
        }

        return response()->download($path);
    }
}
