<?php

namespace App\Traits;

trait DownloadFile
{
    public function download()
    {
        $path = public_path('store/Programme - 16th IFATSEA ARM - Luanda.pdf');

        if (! file_exists($path)) {
            abort(404);
        }

        return response()->download($path);
    }
}
