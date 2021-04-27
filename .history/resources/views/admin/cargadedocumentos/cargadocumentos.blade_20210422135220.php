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
                <form class=""> 
                {!! Form::open(['url' => 'cargadedocumentos/cargadocumentos', 'files' => true]) !!}
                <div class="row">
                    <div class="col-lg-5">     
                            {!! Form::label('Tipo de Solicitud', 'Tipo de Solicitud');!!}
                            {!!  Form::select('size', ['1' => 'tipo de solicitud', '2' => 'tipo de solicitud2'], '3'); !!}
                    </div>   
                </div>
                <hr/>
                <div class="row">
                    <div class="col-lg-6">
                        {!! Form::label('descripcion', 'Descripcion');!!}
                        {!!  Form::textarea('descripcion'); !!}
                    </div>   
                </div>
                <hr/>
                
                <div class="row">
                    <div class="col-lg-5">
                        
                        {!! Form::label('documentoidentidad', 'Copia Documento de Identidad 150%');!!}
                        {!! Form::file('documentoidentificacion'); !!}
                        
                    </div>   
                    <div class="col-lg-5">
                        
                        {!! Form::label('certifiEPS', 'Certificado EPS');!!}
                        {!!  Form::file('certificadoeps'); !!}
                        
                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-5">
                        
                        {!! Form::label('documentoidentidad', 'Copia Documento de Identidad 150%');!!}
                        {!! Form::file('actaydiploma'); !!}
                        
                    </div>   
                    <div class="col-lg-5">
                        
                        {!! Form::label('certifiEPS', 'Certificado EPS');!!}
                        {!!  Form::file('saber11'); !!}
                        
                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-5">
                        
                        {!! Form::label('documentoidentidad', 'Copia Documento de Identidad 150%');!!}
                        {!! Form::file('registrocivil'); !!}
                        
                    </div>   
                    <div class="col-lg-5">
                        
                        {!! Form::label('certifiEPS', 'Certificado EPS');!!}
                        {!!  Form::file('contenidostematicos'); !!}
                        
                    </div> 
                </div>
                &nbsp
                <div class="row">
                    <div class="col-lg-5">
                        
                        {!! Form::label('documentoidentidad', 'Copia Documento de Identidad 150%');!!}
                        {!! Form::file('carnetvacuna'); !!}
                        
                    </div>   
                </div>
                &nbsp &nbsp
                <div class="row">
                    <div class="col-lg-5">
                        
                    {!!  Form::submit('Cargar');; !!}
                        
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