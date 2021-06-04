<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;

class cargadocumentoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $typeForm = '1';
        return view('admin.cargadedocumentos.cargadocumentos', compact('typeForm'));
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
    public function storeNew(Request $request) {
        
        $as = Helper::uploadFile($request->file('documentoidentificacion'), $request->user_id);
        dd($as);
        return $request;
    }
    
    public function storeHomolog(Request $request) {
        $as = Helper::uploadFile($request->file('documentoidentificacion'), $request->user_id);
        dd($as);
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

    public function typeForm(Request $request) {
        switch ($request->Tipo_de_Solicitud_Selecion) {
            case 1:
                $typeForm = '1';
                break;
            case 2:
                $typeForm = '2';
                break;
        }

        return view('admin.cargadedocumentos.cargadocumentos', compact('typeForm'));
    }

}
