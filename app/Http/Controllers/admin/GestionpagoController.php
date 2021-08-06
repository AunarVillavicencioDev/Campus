<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Inscription;
use App\Models\User;
use App\Models\Oportunidad;
use App\Models\Gestionagente;
use App\Models\Documentos_user;
use App\Models\Hojadevida;
use App\Models\Pago;
use App\Models\Liquidation;
use App\Models\Gestionpago;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Auth;

class GestionpagoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $getDataPagos = Pago::all();
        return view('admin.financiero.gestionPagos', compact('getDataPagos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $time = Carbon::now();
        $user_id = Auth::id();
//        dd($time->format('d-m-Y-G-i-s'));

        $importFile = Helper::uploadFile($request->file('fileCsv'), 'financiero/' . $time->format('d-m-Y-Gisa'));

        $logAccionOfFile = Gestionpago::create([
                    'user_id' => $user_id,
                    'url_file' => $importFile,
                    'description' => $request->descripcion,
                    'creation_date' => $time,
        ]);
//        dd($request);
//        $financialuser = Auth::id();
//        $getdataPago = Pago::where('user_id', $request->user_id)->where('id', $request->pago_id)->first();
//        $soportepago = Helper::uploadFile($request->file('soportepago'), $request->user_id);
//        $getdataInscription = Inscription::where('user_id', $request->user_id)->first();
//        //dd($getdataPago);
//        if ($request->estadopago == '1') {
//            dd("sin verificar");
//            GestionPago::create([
//                'pago_id' => $request->pago_id,
//                'estudent_id' => $request->user_id,
//                'financial_id' => $financialuser,
//                'inscription_id' => $getdataInscription->id,
//                'status' => 'Sin verificar',
//                'soporte_de_pago' => $soportepago,
//                'creation_date' => Carbon::now(),
//            ]);
//        }
//        if ($request->estadopago == '2') {
//            dd("Verificado");
//            GestionPago::create([
//                'pago_id' => $request->pago_id,
//                'estudent_id' => $request->user_id,
//                'financial_id' => $financialuser,
//                'inscription_id' => $getdataInscription->id,
//                'status' => 'Sin verificar',
//                'soporte_de_pago' => $soportepago,
//                'creation_date' => Carbon::now(),
//            ]);
//            Pago::where('id', $request->pago_id)->update([
//                'soporte_de_pago' => $soportepago,
//            ]);
//        }
        return $request;
    }

}
