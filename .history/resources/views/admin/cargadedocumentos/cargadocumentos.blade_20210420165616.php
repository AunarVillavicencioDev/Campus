@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Carga de Documentos @endslot
    @slot('title') Carga de Documentos @endslot
@endcomponent 
{!! Form::open(['url' => 'foo/bar', 'files' => true]) !!}

<div class="card">
<div class="card-body">           

<div class="row align-items-center justify-content-center">
<div class="col-md-11 ">
                       
                                {!!  Form::select('size', ['1' => 'tipo de solicitud', '2' => 'tipo de solicitud2'], '3'); !!}
            
        </div>
    </div> <!-- end row-->
</div>
</div>    
    
<div class="row align-items-center justify-content-center">
<div class="col-md-11 ">
         
            <h4 class="card-title mb-4">Descripcion</h4>                
                                {!!  Form::textarea('descripcion'); !!}
           
        </div>
</div> <!-- end row-->
    
<div class="row align-items-center justify-content-center">
<div class="col-md-5 ">
        <div class="card">
            <div class="card-body">   
            <h4 class="card-title mb-4">Copia Documento identificacion 150%</h4>                
                                {!! Form::file('documentoidentificacion'); !!}
            </div>
        </div>
    </div>
    <div class="col-md-6 ">
     <div class="card">
          <div class="card-body">   
            <h4 class="card-title mb-4">Certificado EPS</h4>                
                                {!!  Form::file('certificadoeps'); !!}
              </div>
            </div>
            </div>
</div> <!-- end row-->

<div class="row align-items-center justify-content-center">
<div class="col-md-5 ">
        <div class="card">
            <div class="card-body">   
            <h4 class="card-title mb-4">Acta y diploma de bachiller</h4>                
                                {!! Form::file('actaydiploma'); !!}
            </div>
        </div>
    </div>
    <div class="col-md-6 ">
     <div class="card">
          <div class="card-body">   
            <h4 class="card-title mb-4">Pruebas saber 11</h4>                
                                {!!  Form::file('saber11'); !!}
              </div>
            </div>
            </div>
</div> <!-- end row-->
<div class="row align-items-center justify-content-center">
<div class="col-md-5 ">
        <div class="card">
            <div class="card-body">   
            <h4 class="card-title mb-4">Registro Civil</h4>                
                                {!! Form::file('registrocivil'); !!}
            </div>
        </div>
    </div>
    <div class="col-md-6 ">
     <div class="card">
          <div class="card-body">   
            <h4 class="card-title mb-4">Contenidos Tematicos</h4>                
                                {!!  Form::file('contenidostematicos'); !!}
              </div>
            </div>
            </div>
</div> <!-- end row-->
<div class="row align-items-center justify-content-center">
<div class="col-md-11 ">
        <div class="card">
            <div class="card-body">   
            <h4 class="card-title mb-4">Carnet de Vacuna</h4>                
                                {!! Form::file('carnetvacuna'); !!}
            </div>
        </div>
    </div>
   </div> <!-- end row-->
</div>
<div class="row align-items-left justify-content-center">
<div class="col-md-3 ">
                         
                                {!!  Form::submit('Cargar');; !!}
             
        </div>
    </div> <!-- end row-->

{!! Form::close() !!} 
@endsection
@section('script')
       <!-- apexcharts -->
       <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

       <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection