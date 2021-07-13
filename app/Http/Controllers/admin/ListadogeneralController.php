<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Inscription;
use App\Models\User;
use App\Models\Gestionagente;
use App\Helpers\Status;

class ListadogeneralController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //$user_id = Auth::id();
        //$user_profile = Auth::user()->profile; 
        //$estado = Status::estadoinscription($user_profile);

        $dbinscripciones = Inscription::all();

        return view('admin.admisiones.listadogeneral', compact('dbinscripciones'));
    }

}
