@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Carga de Documentos @endslot
    @slot('title') Carga de Documentos @endslot
@endcomponent 

<div class="row">
<div class="col-md-6 ">
        <div class="card">
            <div class="card-body">
              
                   
               
                {!! Form::open(['url' => 'foo/bar']) !!}
                {!!  Form::select('size', ['1' => 'tipo de solicitud', '2' => 'tipo de solicitud2'], '3'); !!}
                {!! Form::close() !!}
                   
           
              
            </div>
        </div>
    </div> <!-- end col-->

@endsection
@section('script')
       <!-- apexcharts -->
       <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

       <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection