@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Carga de Documentos @endslot
@slot('title') Carga de Documentos @endslot
@endcomponent 

<div class="row align-items-center justify-content-center">
    <div class="col-xl-12 ">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="row">
                    <div class="col-lg-6">
                        {!! Form::open(['route' => 'cargadocumentos.valida.form']) !!}
                        <input type="hidden" name="_method" value="PUT">
                        {!! Form::label('Tipo_de_Solicitud_Selecion', __('documentos.tipo_form'));!!}
                        {!!  Form::select('Tipo_de_Solicitud_Selecion', ['1' => 'Nuevo', '2' => 'Homologante'], $typeForm, ['class' => 'form-control form-control-lg', 'id'=>'Tipo_de_Solicitud_Selecion']); !!}
                        {!! Form::close() !!}  
                    </div>   
                </div>
                {!! Form::open(['route' => ActionValidate::validNewHomologRoute($typeForm), 'files' => true]) !!}
                <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
                <input type="hidden" name="tipo_form" id="tipo_form" value="{{$typeForm}}">
                <hr/>
                <div class="row">
                    <div class="col-lg-6">
                        {!! Form::label('descripcion', __('documentos.descripcion'));!!}
                        {!!  Form::textarea('descripcion','',['class' => 'form-control']); !!}
                    </div>   
                </div>
                <hr/>
                <div class="alert alert-border alert-border-warning alert-dismissible fade show" role="alert">

                    <p>
                        <i class="uil uil-exclamation-triangle font-size-16 text-warning me-2"></i> Recuerde revisar muy bien antes de enviar la información, ya que tendrá que cargar los archivos de nuevo
                    </p> 
                    <p>
                        si no cumple con las características de los archivos.
                    </p>
                    <p>
                        - El peso máximo para los archivos es de 20MG.
                    </p>
                    <p>
                        - Recuerde que el formato de los archivos es PDF.
                    </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                    </button>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        {{old('Copia_de_Cedula_Al_150')}}
                        {!! Form::label('copia_de_cedula_al_150', __('documentos.copia_de_cedula'));!!}
                        {!! Form::file('copia_de_cedula_al_150', ['class' => 'form-control']); !!}

                    </div>   
                    <div class="col-lg-6">

                        {!! Form::label('certificado_de_afiliacion_a_su_eps', __('documentos.certificado_eps'));!!}
                        {!! Form::file('certificado_de_afiliacion_a_su_eps', ['class' => 'form-control']); !!}

                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('registro_civil_legible', __('documentos.registro_civil'));!!}
                        {!! Form::file('registro_civil_legible', ['class' => 'form-control']); !!}

                    </div>   
                    <div class="col-lg-6">

                        {!! Form::label('acta_y_diploma_de_bachiller', __('documentos.acta_diploma_bachiller'));!!}
                        {!! Form::file('acta_y_diploma_de_bachiller', ['class' => 'form-control']); !!}

                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('foto_tipo_documento_3x4_formato_jpg', __('documentos.foto_documento'));!!}
                        {!! Form::file('foto_tipo_documento_3x4_formato_jpg', ['class' => 'form-control']); !!}

                    </div>   
                    <div class="col-lg-6">
                        {!! Form::label('resultados_de_prueba_saber', __('documentos.resultados_saber'));!!}
                        {!! Form::file('resultados_de_prueba_saber', ['class' => 'form-control']); !!}

                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('ficha_de_inscripcion_entregada_por_asesor', __('documentos.ficha_inscripcion'));!!}
                        {!! Form::file('ficha_de_inscripcion_entregada_por_asesor', ['class' => 'form-control']); !!}

                    </div>   
                    <div class="col-lg-6">

                        {!! Form::label('formato_de_tratamiento_de_datos_personales', __('documentos.formato_tratamiento'));!!}
                        {!! Form::file('formato_de_tratamiento_de_datos_personales', ['class' => 'form-control']); !!}

                    </div>
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('examen_medico_general ', __('documentos.examen_medico'));!!}
                        {!! Form::file('examen_medico_general', ['class' => 'form-control']); !!}

                    </div>   
                    <div class="col-lg-6">

                        {!! Form::label('examen_de_serologia', __('documentos.examen_serologia'));!!}
                        {!! Form::file('examen_de_serologia', ['class' => 'form-control']); !!}

                    </div>
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('soporte_de_pago', __('documentos.soporte_pago'));!!}
                        {!! Form::file('soporte_de_pago', ['class' => 'form-control']); !!}

                    </div> 
                    @valiTypeFormNuevo($typeForm)
                    <div class="col-lg-6">

                        {!! Form::label('resolución_y_acta_de_homologación', __('documentos.resolucion_acta_homologacion'));!!}
                        {!! Form::file('resolución_y_acta_de_homologación', ['class' => 'form-control']); !!}

                    </div>
                    @endvaliTypeFormNuevo
                </div>
                &nbsp
                @valiTypeFormNuevo($typeForm)
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('certificado_de_notas', __('documentos.certificado_notas'));!!}
                        {!! Form::file('certificado_de_notas', ['class' => 'form-control']); !!}

                    </div> 
                    <div class="col-lg-6">

                        {!! Form::label('contenido_tematico', __('documentos.contenidos_tematicos'));!!}
                        {!! Form::file('contenido_tematico', ['class' => 'form-control']); !!}

                    </div> 
                </div>
                &nbsp
                @endvaliTypeFormNuevo
                @valiProgram104600(ActionValidate::querryProgram(Auth::id(), 'Codigo'))
                <div class="row">
                    <div class="col-lg-6">

                        {!! Form::label('carnet_de_vacunas', __('documentos.carnet_vacunas'));!!}
                        {!! Form::file('carnet_de_vacunas', ['class' => 'form-control']); !!}

                    </div> 
                </div>
                @endvaliProgram104600
                &nbsp
                <br>
                <div class="alert alert-border alert-border-danger alert-dismissible fade show" role="alert">
                    <i class="uil uil-exclamation-octagon font-size-16 text-danger me-2"></i>
                    Recuerde que el formato de los archivos es PDF. El peso máximo para los archivos es de 20MG.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                    </button>
                </div>
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