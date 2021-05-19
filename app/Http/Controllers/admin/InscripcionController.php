<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App;
use App\Http\Requests\InscriptioCreateRequest;
use App\Models\Countrie;
use App\Models\Program;

class InscripcionController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
//        cargar paises
        $paisesDb = Countrie::get()->toArray();
        $paises = array();
        foreach ($paisesDb as $key => $value) {
            $paises[$value['pais']] = $value['pais'];
        }
//        cargar programas
        $programasDb = Program::all();
//        dd($programasDb);
        foreach ($programasDb as $keyPro => $valuePro) {
            $programas[$valuePro['Codigo']] = $valuePro['Nombre'];
        }
//        dd($programas);
        
        $now = Carbon::now();
        
        return view('admin.inscripciones.index', compact('paises', 'programas', 'now'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InscriptioCreateRequest $request) {

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
