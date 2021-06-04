<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentsCreateHomologRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'user_id' => 'required',
            'tipo_form' => 'required|max:255',
            'descripcion' => 'nullable',
            'copia_de_cedula' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'certificado_eps' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'registro_civil' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'acta_diploma_bachiller' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'foto_documento' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'resultados_saber' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'ficha_inscripcion' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'formato_tratamiento' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'examen_medico' => 'nullable|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'examen_serologia' => 'nullable|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'soporte_pago' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'resolucion_acta_homologacion' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'certificado_notas' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'contenidos_tematicos' => 'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
            'carnet_vacunas' => 'nullable|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf',
        ];
    }

    public function messages() {
        return [
            'tipo_form.required' => 'El campo ' . __('documentos.tipo_form') . ' es requerido.',
            'copia_de_cedula.required' => 'El campo ' . __('documentos.copia_de_cedula') . ' es requerido.',
            'copia_de_cedula.mimes' => 'El campo ' . __('documentos.copia_de_cedula') . ' debe contener un archivo de formato PDF.',
            'certificado_eps.required' => 'El campo ' . __('documentos.certificado_eps') . ' es requerido.',
            'certificado_eps.mimes' => 'El campo ' . __('documentos.certificado_eps') . ' debe contener un archivo de formato PDF.',
            'registro_civil.required' => 'El campo ' . __('documentos.registro_civil') . ' es requerido.',
            'registro_civil.mimes' => 'El campo ' . __('documentos.registro_civil') . ' debe contener un archivo de formato PDF.',
            'acta_diploma_bachiller.required' => 'El campo ' . __('documentos.acta_diploma_bachiller') . ' es requerido.',
            'acta_diploma_bachiller.mimes' => 'El campo ' . __('documentos.acta_diploma_bachiller') . ' debe contener un archivo de formato PDF.',
            'foto_documento.required' => 'El campo ' . __('documentos.foto_documento') . ' es requerido.',
            'foto_documento.mimes' => 'El campo ' . __('documentos.foto_documento') . ' debe contener un archivo de formato PDF.',
            'resultados_saber.required' => 'El campo ' . __('documentos.resultados_saber') . ' es requerido.',
            'resultados_saber.mimes' => 'El campo ' . __('documentos.resultados_saber') . ' debe contener un archivo de formato PDF.',
            'ficha_inscripcion.required' => 'El campo ' . __('documentos.ficha_inscripcion') . ' es requerido.',
            'ficha_inscripcion.mimes' => 'El campo ' . __('documentos.ficha_inscripcion') . ' debe contener un archivo de formato PDF.',
            'formato_tratamiento.required' => 'El campo ' . __('documentos.formato_tratamiento') . ' es requerido.',
            'formato_tratamiento.mimes' => 'El campo ' . __('documentos.formato_tratamiento') . ' debe contener un archivo de formato PDF.',
            'examen_medico.mimes' => 'El campo ' . __('documentos.examen_medico') . ' debe contener un archivo de formato PDF.',
            'examen_serologia.mimes' => 'El campo ' . __('documentos.examen_serologia') . ' debe contener un archivo de formato PDF.',
            'soporte_pago.required' => 'El campo ' . __('documentos.soporte_pago') . ' es requerido.',
            'soporte_pago.mimes' => 'El campo ' . __('documentos.soporte_pago') . ' debe contener un archivo de formato PDF.',
            'resolucion_acta_homologacion.required' => 'El campo ' . __('documentos.resolucion_acta_homologacion') . ' es requerido.',
            'resolucion_acta_homologacion.mimes' => 'El campo ' . __('documentos.resolucion_acta_homologacion') . ' debe contener un archivo de formato PDF.',
            'certificado_notas.required' => 'El campo ' . __('documentos.certificado_notas') . ' es requerido.',
            'certificado_notas.mimes' => 'El campo ' . __('documentos.certificado_notas') . ' debe contener un archivo de formato PDF.',
            'contenidos_tematicos.required' => 'El campo ' . __('documentos.contenidos_tematicos') . ' es requerido.',
            'contenidos_tematicos.mimes' => 'El campo ' . __('documentos.contenidos_tematicos') . ' debe contener un archivo de formato PDF.',
            'carnet_vacunas.file' => 'El campo ' . __('documentos.carnet_vacunas') . ' debe contener un archivo de formato PDF.',
        ];
    }

    public function attributes() {
        return [
                //
        ];
    }

}
