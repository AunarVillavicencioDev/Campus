@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Carga de Documentos @endslot
    @slot('title') Carga de Documentos @endslot
@endcomponent 
{!! Form::open(['url' => 'foo/bar']) !!}
<div class="row">
<div class="col-md-3 ">
        <div class="card">
            <div class="card-body">                   
                                {!!  Form::select('size', ['1' => 'tipo de solicitud', '2' => 'tipo de solicitud2'], '3'); !!}
              </div>
            </div>
        </div>
    </div> <!-- end col-->
    <div class="row">
<div class="col-md-5 ">
        <div class="card">
            <div class="card-body">   
            <h4 class="card-title mb-4">Descripcion</h4>                
                                {!!  Form::textarea('descripcion'); !!}
              </div>
            </div>
        </div>
    </div> <!-- end col-->

    {!! Form::close() !!} 
@endsection
@section('script')
       <!-- apexcharts -->
       <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

       <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection