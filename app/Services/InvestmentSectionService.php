<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class InvestmentSectionService
{
    public function upload(string $title, UploadedFile $file, object $model, bool $delete = false)
    {

    }
}
