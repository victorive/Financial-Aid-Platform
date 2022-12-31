<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait MediaUploadTrait
{
    public function uploadMedia(UploadedFile $uploadedFile, $folder, $filename)
    {
        $file = $uploadedFile->storeAs($folder, $filename);
        
        return $file;
    }
}