@extends('layouts.master')
@section('title') @lang('inscripcion.name') @endsection
@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') @lang('dashboard.name') @endslot
@slot('title') @lang('inscripcion.names') @endslot
@endcomponent 
<head>
<link href= "http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.css"    rel="stylesheet" type="text/css">
<link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+128&display=swap" rel="stylesheet">
<style>
</style>
</head>

                                       
<div class="row align-items-start justify-content-center">
    <div class="col-xl-12 ">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-start justify-content-center">
                     <div class="col-xl-2" id="espacioblanco">
                     </div>
                     <div class="col-xl-2">
                           <div class="row">
                            <p> ID oportunidad <p>
                           </div>
                           <div class="row">
                            <p> 999999 <p>
                           </div> 
                     </div>
                     <div class="col-xl-2 ">
                           <div class="row">
                           <p> Nombre <p>
                           </div>
                           <div class="row">
                            <p> Giacomo guilizzoni <p>
                           </div> 
                     </div>
                     <div class="col-xl-2">
                           <div class="row">
                           <p> Telefono <p>
                           </div>
                           <div class="row">
                            <p> 300 000 0000 <p>
                           </div> 
                     </div>
                     <div class="col-xl-2 ">
                           <div class="row">
                           <p> Programa <p>
                           </div>
                           <div class="row">
                            <p> Diseño Visual <p>
                           </div>
                     </div>
                     <div class="col-xl-2" id="espacioblanco">
                     </div>

                </div>                   
            </div>
        </div>
    </div>
</div> <!-- end row-->
    
@endsection
@section('script')
<!-- jquery-steps js -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
<script src="{{ URL::asset('/js/pages/inscripcion.js') }}"></script>
<script src="{{ URL::asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/node-waves/waves.min.js') }}"></script>
@endsection


