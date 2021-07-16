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
use App\Models\Oportunidad;
use App\Models\User;
use App\Models\Documentos_user;
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
        $url = /* Request::root() . */ $file;
//        return response()->download($file);
        return $url;
    }

    public static function setNameProgramById($program_id) {
        $program = Program::where('id', $program_id)->first();
//        dd($program->Nombre);
        return $program->Nombre;
    }

    public static function estadoinscription($indice) {
        $estado = (object) array(
                    '1' => 'Prospecto',
                    '2' => 'Aspirante',
                    '3' => 'Orden de liquidacion',
                    '4' => 'Proceso de matricula',
                    '5' => 'Matriculado',
        );
        return $estado->{$indice};
    }

    public static function consultDataOpportuni($oportunidad_id) {
        $getDataopportunity = Oportunidad::where('id', $oportunidad_id)->first();
        $getDataInscription = Inscription::where('id', $getDataopportunity->inscription_id)->first();
        $getDataUser = User::where('id', $getDataopportunity->student_id)->first();
        $dataOpportunity = (object) array(
                    'id' => $oportunidad_id,
                    'user_id' => $getDataUser->id,
                    'name' => $getDataInscription->pri_nombre . ' ' . $getDataInscription->seg_nombre . ' ' . $getDataInscription->pri_apellido . ' ' . $getDataInscription->seg_apellido,
                    'movil' => $getDataUser->movil,
                    'program' => Helper::setNameProgramById($getDataInscription->programa_id),
                    'academicDay' => $getDataInscription->jornada,
                    'edad' => Helper::calcularedad($getDataInscription->fecha_nacimientos),
                    'estado' => Helper::estadoinscription($getDataInscription->status),
                    'departamento' => $getDataInscription->deparatamento_recidencia,
                    'municipio' => $getDataInscription->municipio_recidencia,
                    'direccion' => $getDataInscription->direcion_recidencia,
                    'colegio' => $getDataInscription->colegio
        );
        return $dataOpportunity;
    }

    public static function calcularedad($fecha_nacimiento) {
        $nacimiento = new \DateTime($fecha_nacimiento);
        $ahora = new \DateTime(date("Y-m-d"));
        $diferencia = $ahora->diff($nacimiento);
        return $diferencia->format("%y");
    }

    public static function consulDataDocumentsbyuserid($user_id) {

        $getDatadocuments = Documentos_user::where('user_id', $user_id)->first();

        $datadocuments = (object) array(
                    'user_id' => $getDatadocuments->user_id,
                    'copia_de_cedula' => $getDatadocuments->copia_de_cedula,
                    'certificado_eps' => $getDatadocuments->certificado_eps,
                    'registro_civil' => $getDatadocuments->registro_civil,
                    'acta_diploma_bachiller' => $getDatadocuments->acta_diploma_bachiller,
                    'foto_documento' => $getDatadocuments->foto_documento,
                    'resultados_saber' => $getDatadocuments->resultados_saber,
                    'ficha_inscripcion' => $getDatadocuments->ficha_inscripcion,
                    'formato_tratamiento' => $getDatadocuments->formato_tratamiento,
                    'examen_medico' => $getDatadocuments->examen_medico,
                    'examen_serologia' => $getDatadocuments->examen_serologia,
                    'soporte_pago' => $getDatadocuments->soporte_pago
        );
        return $datadocuments;
    }

}
