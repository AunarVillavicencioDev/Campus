<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\User;
use App\Models\Oportunidad;
use App\Models\Gestionagente;
use App\Models\Documentos_user;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use App\Helpers\Edad;

class HojadevidaController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $dbdocumentos_user = Documentos_user::all();
        $numerodocumentos = Documentos_user::all()->count();
        $dbdatosuserids = [];
        //dd($numerodocumentos);
        $total = count(Schema::getColumnListing('$dbdocumentos_user'));
        //dd($dbdocumentos_user); 
        if (empty($dbdocumentos_user)) {
            dd("esta vacio pana");
        }
        foreach ($dbdocumentos_user as $itemsdocumentos) {
            $dbdatosuserids[] = $itemsdocumentos->user_id;
        }
        //dd($dbdatosuserids);
        $dbuser = User::WhereIn('id', $dbdatosuserids)->get();
        //dd($dbuser);
        $dboportunidades = Oportunidad::WhereIn('student_id', $dbdatosuserids)->get();
        //dd($dboportunidades);

        return view('admin.admisiones.gestionarhvs', compact('dboportunidades'));
    }

    public function store(Request $request) {
        return $request;
    }

}
