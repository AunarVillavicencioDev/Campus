@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Carga de Documentos @endslot
@slot('title') Carga de Documentos @endslot
@endcomponent 

{{ActionValidate::validFile104600(ActionValidate::querryProgram(Auth::id(), 'Codigo'))}}                        
<div class="row align-items-center justify-content-center">
    <div class="col-xl-12 ">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        {!! Form::open(['route' => 'cargadocumentos.valida.form']) !!}
                        {!! Form::label('Tipo_de_Solicitud_Selecion', __('documentos.tipo_form'));!!}
                        {!!  Form::select('Tipo_de_Solicitud_Selecion', ['1' => 'Nuevo', '2' => 'Homologante'], $typeForm, ['class' => 'form-control form-control-lg', 'id'=>'Tipo_de_Solicitud_Selecion']); !!}
                        {!! Form::close() !!}  
                    </div>   
                </div>
                {!! Form::open(['route' => ActionValidate::validNewHomologRoute($typeForm), 'files' => true]) !!}
                <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
                <input type="hidden" name="Tipo_de_Solicitud" id="Tipo_de_Solicitud" value="{{$typeForm}}">
                <hr/>
                <div class="row">
                    <div class="col-lg-6">
                        {!! Form::label('descripcion', __('documentos.descripcion'));!!}
                        {!!  Form::textarea('descripcion','',['class' => 'form-control']); !!}
                    </div>   
                </div>
                <hr/>

                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('Copia_de_Cedula_Al_150', __('documentos.Copia_de_Cedula'));!!}
                        {!! Form::file('Copia_de_Cedula_Al_150', ['class' => 'form-control']); !!}

                    </div>   
                    <div class="col-lg-6">

                        {!! Form::label('certificado_de_afiliación_a_su_eps', __('documentos.Certificado_Eps'));!!}
                        {!! Form::file('certificado_de_afiliación_a_su_eps', ['class' => 'form-control']); !!}

                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('registro_civil_legible', __('documentos.Registro_Civil'));!!}
                        {!! Form::file('registro_civil_legible', ['class' => 'form-control']); !!}

                    </div>   
                    <div class="col-lg-6">

                        {!! Form::label('acta_y_diploma_de_bachiller', __('documentos.Acta_Diploma_Bachiller'));!!}
                        {!! Form::file('acta_y_diploma_de_bachiller', ['class' => 'form-control']); !!}

                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('foto_tipo_documento_3x4_formato_jpg', __('documentos.Foto_Documento'));!!}
                        {!! Form::file('foto_tipo_documento_3x4_formato_jpg', ['class' => 'form-control']); !!}

                    </div>   
                    <div class="col-lg-6">

                        {!! Form::label('resultados_de_prueba_saber', __('documentos.Resultados_Saber'));!!}
                        {!! Form::file('resultados_de_prueba_saber', ['class' => 'form-control']); !!}

                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('Ficha_de_Inscripción_Entregada_Por_Asesor', __('documentos.Ficha_Inscripcion'));!!}
                        {!! Form::file('Ficha_de_Inscripción_Entregada_Por_Asesor', ['class' => 'form-control']); !!}

                    </div>   
                    <div class="col-lg-6">

                        {!! Form::label('formato_de_tratamiento_de_datos_personales', __('documentos.Formato_Tratamiento'));!!}
                        {!! Form::file('formato_de_tratamiento_de_datos_personales', ['class' => 'form-control']); !!}

                    </div>
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('Examen_Medico_General ', __('documentos.Examen_Medico'));!!}
                        {!! Form::file('Examen_Medico_General', ['class' => 'form-control']); !!}

                    </div>   
                    <div class="col-lg-6">

                        {!! Form::label('examen_de_serología', __('documentos.Examen_Serologia'));!!}
                        {!! Form::file('examen_de_serología', ['class' => 'form-control']); !!}

                    </div>
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('soporte_de_pago', __('documentos.Soporte_Pago'));!!}
                        {!! Form::file('soporte_de_pago', ['class' => 'form-control']); !!}

                    </div> 
                    @valiTypeFormNuevo($typeForm)
                    <div class="col-lg-6">

                        {!! Form::label('resolución_y_acta_de_homologación', __('documentos.Resolucion_Acta_Homologacion'));!!}
                        {!! Form::file('resolución_y_acta_de_homologación', ['class' => 'form-control']); !!}

                    </div>
                    @endvaliTypeFormNuevo
                </div>
                &nbsp
                @valiTypeFormNuevo($typeForm)
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('certificado_de_notas', __('documentos.Certificado_Notas'));!!}
                        {!! Form::file('certificado_de_notas', ['class' => 'form-control']); !!}

                    </div> 
                    <div class="col-lg-6">

                        {!! Form::label('contenido_tematico', __('documentos.Contenidos_Tematicos'));!!}
                        {!! Form::file('contenido_tematico', ['class' => 'form-control']); !!}

                    </div> 
                </div>
                &nbsp
                @endvaliTypeFormNuevo
                @valiProgram104600(ActionValidate::querryProgram(Auth::id(), 'Codigo'))
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('carnet_de_vacunas', __('documentos.Carnet_Vacunas'));!!}
                        {!! Form::file('carnet_de_vacunas', ['class' => 'form-control']); !!}

                    </div> 
                </div>
                @endvaliProgram104600
                &nbsp
                <br>
                <div class="row">
                    <div class="col-lg-12 mt-4 d-grid gap-1">
                        {{ Form::button('<i class="fas fa-cloud-upload-alt"></i>  Cargar', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg btn-block waves-effect waves-light mb-2'] )  }}
                    </div>   
                </div>

                {!! Form::close() !!}            
            </div>
        </div>
    </div>
</div> <!-- end row-->




@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<script src="{{ URL::asset('/js/pages/cargardocumentos.js') }}"></script>
@endsection