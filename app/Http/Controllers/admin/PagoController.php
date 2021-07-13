<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;
use App\Models\User;
use App\Models\Inscription;
use App\Models\Liquidation;
use Illuminate\Support\Facades\Auth;
use App\Models\Price;
use App\Models\Pago;

class PagoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $user_id = Auth::id();
        $pagos = Pago::where('user_id', $user_id)->get();
//        dd($pagos);
        return view('admin.estudiantes.pagos.pagos', compact('pagos'));
    }

    public function indexTarjetas() {
        $user = Auth::user();
        $inscripcion = Inscription::where('user_id', $user->id)->first();
        $liquidacion = Liquidation::where('user_id', $user->id)->where('period', $inscripcion->periodo_academico)->first();
        $pagos = Pago::where('id', $user->id)->get();

        return view('admin.estudiantes.pagos.tarjetas', compact('user', 'liquidacion'));
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
    public function store(Request $request) {
        //
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
