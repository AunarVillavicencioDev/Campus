<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Support\Facades\URL;
use App\Models\Inscription;
use Illuminate\Support\Facades\Redirect;

class AcctionValidate {

    public static function validaInscripcion($param) {
        $urlActual = URL::current();
        $urlInscrip = url("/escritorio");
        if (Inscription::where('user_id', $param)->count() == 0) {
            if ($urlActual != $urlInscrip) {
                $js = '<script type="text/javascript">'
                        . 'window.location="' . $urlInscrip . '";'
                        . '</script>';
                echo $js;
            }
        }
    }

}
