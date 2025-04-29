<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

//CMS
use App\Models\Gallery;

class GalleryService
{
    public function upload(string $title, UploadedFile $file, object $model, bool $delete = false)
    {
        if ($delete) {
            if (File::isFile(public_path('uploads/gallery/' . $model->file))) {
                File::delete(public_path('uploads/gallery/' . $model->file));
            }
        }
        $name = date('His').'_'.Str::slug($title).'.' . $file->getClientOriginalExtension();
        $file->storeAs('gallery', $name, 'public_uploads');
        $model->update(['file' => $name]);
    }
}
