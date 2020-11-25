<?php

namespace App\Util;

class FileUploadUtil
{
    public static function uploadFile($file)
    {
        $folder = 'uploads';
        $filename = uniqid() . $file->getClientOriginalName();

        $file->storeAs($folder, $filename);

        return $filename;
    }

    public static function uploadFileMultiple($files)
    {
        $folder = 'uploads';
        $filenames = [];
        foreach ($files as $file) {
            $filename = uniqid() . $file->getClientOriginalName();
            $file->storeAs($folder, $filename);
            array_push($filenames, $filename);
        }

        return implode(',', $filenames);
    }
}