@extends('layouts.master-withoyt-nav')
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
                <form class=""> 
                {!! Form::open(['url' => 'cargadedocumentos/cargadocumentos', 'files' => true]) !!}
                <div class="row">
                    <div class="col-lg-6">     
                            {!! Form::label('Tipo de Solicitud', 'Tipo De Solicitud');!!}
                            {!!  Form::select('size', ['1' => 'Tipo De Solicitud', '2' => 'Tipo De Solicitud2'], '3', ['class' => 'form-control form-control-lg']); !!}
                    </div>   
                </div>
                <hr/>
                <div class="row">
                    <div class="col-lg-6">
                        {!! Form::label('descripcion', 'Descripcion');!!}
                        {!!  Form::textarea('descripcion','',['class' => 'form-control']); !!}
                    </div>   
                </div>
                <hr/>
                
                <div class="row">
                    <div class="col-lg-6">
                        
                        {!! Form::label('documentoidentidad', 'Copia Documento De Identidad 150%');!!}
                        {!! Form::file('documentoidentificacion', ['class' => 'form-control']); !!}
                        
                    </div>   
                    <div class="col-lg-6">
                        
                        {!! Form::label('certifiEPS', 'Certificado EPS');!!}
                        {!!  Form::file('certificadoeps', ['class' => 'form-control']); !!}
                        
                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">
                        
                        {!! Form::label('actaydiploma', 'Acta y Diploma De Bachiller');!!}
                        {!! Form::file('actaydiploma', ['class' => 'form-control']); !!}
                        
                    </div>   
                    <div class="col-lg-6">
                        
                        {!! Form::label('saber11', 'Pruebas Saber 11');!!}
                        {!!  Form::file('saber11', ['class' => 'form-control']); !!}
                        
                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">
                        
                        {!! Form::label('registrocivil', 'Registro Civil');!!}
                        {!! Form::file('registrocivil', ['class' => 'form-control']); !!}
                        
                    </div>   
                    <div class="col-lg-6">
                        
                        {!! Form::label('contenidostematicos', 'Contenidos Tematicos');!!}
                        {!!  Form::file('contenidostematicos', ['class' => 'form-control']); !!}
                        
                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-6">
                        
                        {!! Form::label('carnetvacuna', 'Carnet De Vacuna');!!}
                        {!! Form::file('carnetvacuna',['class' => 'form-control']); !!}
                        
                    </div>   
                </div>
                &nbsp 
                <br>
                <div class="row justify-content-end">
                    <div class="col-lg-1">
                        
                  
                    {{ Form::button('<i class="fas fa-cloud-upload-alt"></i>  Cargar', ['type' => 'submit', 'class' => 'btn btn-primary btn-lg waves-effect waves-light'] )  }}
                        
                    </div>   
                </div>
             
                {!! Form::close() !!} 
                </form>                
            </div>
        </div>
    </div>
</div> <!-- end row-->
    



@endsection
@section('script')
       <!-- apexcharts -->
       <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

       <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection