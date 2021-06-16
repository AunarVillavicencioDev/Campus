<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenPayController extends Controller {
    function __construct() {
        include_once '../../../vendor/openpay/sdk/Openpay.php';
    }


    public function index() {
        return '1';
    }

}
