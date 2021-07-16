<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Inscription;
use App\Models\User;
use App\Models\Gestionagente;
use App\Helpers\Helper;
use Illuminate\Support\Facades\DB;
use App\Models\Oportunidad;
use Carbon\Carbon;
use App\Http\Requests\OportunidaStoreRequest;

class OportunidadController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $user_id = Auth::id();
        $user_profile = Auth::user()->profile;
        $estado = Helper::estadoinscription($user_profile);

        $dbinscripciones = Inscription::where('status', '1')->where('asignado_agente', '0')->get();
        //dd($dbinscripciones);
        $agentes = User::where('profile', '2')->where('status', '1')->get();
        //dd($agentes[0]->id);
        $numeroAgentes = User::where('profile', '2')->where('status', '1')->count();
        //dd($numeroAgentes);
        $repartidor = array();
        foreach ($dbinscripciones as $items) {

            $repartidor[] = $items->id;
            //dd($repartidor);
            $datosUser[$items->id] = $items->user_id;
        }
        //dd($repartidor);
        if (count($repartidor) >= $numeroAgentes) {
            $valorrepartidor = count($repartidor) / $numeroAgentes;
            //dd($valorrepartidor);
            $repartidorvista = array_chunk($repartidor, $valorrepartidor, true);

            //dd($repartidorvista);
            $i = 0;

            while ($i < $numeroAgentes) {

                foreach ($repartidorvista[$i] as $itemsrepartidor) {
                    //dd($itemsrepartidor);
                    if ((Oportunidad::where('inscription_id', $itemsrepartidor)->count()) == '0') {
                        //dd($itemsrepartidor);
                        Oportunidad::create([
                            'agent_id' => $agentes[$i]->id,
                            'inscription_id' => $itemsrepartidor,
                            'student_id' => $datosUser[$itemsrepartidor],
                            'status' => '1',
                            'creation_date' => Carbon::now(),
                        ]);
                        Inscription::where('id', $itemsrepartidor)->update([
                            'asignado_agente' => $agentes[$i]->id,
                        ]);
                    }
                }
                $i++;
            }
        }
        $inscripcionesvista = Inscription::where('status', '1')->where('asignado_agente', $user_id)->get();
        foreach ($inscripcionesvista as $items) {

            $repartidoroportunidades[] = $items->id;
        }
        $oportunidades = Oportunidad::whereIn('inscription_id', $repartidoroportunidades)->get();
        return view('admin.admisiones.gestionarOportunidades', compact('oportunidades'));
    }

    public function edit($oportunida_id) {
        return view('admin.admisiones.gestionarOportunidad', compact('oportunida_id'));
    }

    public function store(OportunidaStoreRequest $request) {
        
        return $request;
    }

}
