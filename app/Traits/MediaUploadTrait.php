<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait MediaUploadTrait
{
    public function uploadMedia(UploadedFile $uploadedFile, $folder = null, $filename = null)
    {
        $file = $uploadedFile->storeAs($folder, $filename);
        
        return $file;
    }
}