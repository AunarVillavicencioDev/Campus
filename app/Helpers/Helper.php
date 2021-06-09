<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Helpers;

use Illuminate\Support\Facades\URL;
use App\Models\Inscription;
use App\Models\Program;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Request;

class Helper {

    public static function uploadFile($fileInput, $id_user) {
        $nameFile = str_replace(' ', '_', $fileInput->getClientOriginalName());
        $ruteFile = 'Documents/' . $id_user . '/' . $nameFile;
        Storage::disk('aunar')->put($ruteFile, \File::get($fileInput));

        $file = "/storage/app/aunar/{$ruteFile}";
//        $url = Storage::disk('aunar')->url("app/aunar/{$ruteFile}");
        $url = /*Request::root() .*/ $file;
//        return response()->download($file);
        return $url;
    }
   
}
