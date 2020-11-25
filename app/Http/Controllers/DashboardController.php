<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function download($imageLink)
    {
        return Storage::download('uploads/' . $imageLink);
    }

    public function downloadMultiple($imageLinks)
    {

        $files = explode(',', $imageLinks);
        $zip_file = 'images.zip';

        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        foreach ($files as $file) {
            $zip->addFile('uploads/' . $file);
        }
        $zip->close();

        return response()->download($zip_file);
    }
}
