@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
<head>
<link href="http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.css" rel="stylesheet" type="text/css">
<!-- Bootstrap Css -->
<link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
<!-- Icons Css -->
<link href="http://minible-v-light.laravel.themesbrand.com/assets/css/icons.min.css" id="icons-style" rel="stylesheet" type="text/css">
<!-- App Css-->
<link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
<style>
 #ocultar1{visibility:hidden;}
 #ocultar2{visibility:hidden;}
 #ocultar3{visibility:hidden;}
</style>
</head>

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Listado General @endslot
    @slot('title') Listado General @endslot
@endcomponent 



<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title"></h4>
                 

                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                    <div class="col-sm-12 col-md-6" id="ocultar1">
                    <div class="dt-buttons btn-group flex-wrap">  
                        <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                        <span>Copy</span>
                        </button> 
                        <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                        <span>Excel</span>
                        </button> 
                        <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                        <span>PDF</span>
                        </button> 
                        <div class="btn-group">
                        <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="datatable-buttons" type="button" aria-haspopup="true" aria-expanded="false">
                        <span>Column visibility</span>
                        </button>
                        </div> 
                        </div>
                        </div>
                        <div class="col-sm-12 col-md-6" id="ocultar3"><div id="datatable-buttons_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable-buttons"></label></div></div></div>
                        <div class="row"><div class="col-sm-12"><table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                        <thead>
                            <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 148px;" aria-sort="ascending" aria-label="Id Oportunidad: activate to sort column descending">Id Oportunidad</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 226px;" aria-label="Nombre: activate to sort column ascending">Nombre</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 106px;" aria-label="Estado: activate to sort column ascending">Estado</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 35px;" aria-label="Ciudad: activate to sort column ascending">Ciudad</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 95px;" aria-label="Edad: activate to sort column ascending">Edad</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 91px;" aria-label="Colegio: activate to sort column ascending">Colegio</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 91px;" aria-label="Homologa: activate to sort column ascending">Homologa</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 91px;" aria-label="Gestionar: activate to sort column ascending">Gestionar</th></tr>
                        </thead>


                        <tbody>                             
                        <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">01</td>
                                <td>Giacomo Guillizi Founder & CEO</td>
                                <td>Oportunidad</td>
                                <td>Acacias</td>
                                <td>40</td>
                                <td></td>
                                <td> 
                                    <div class="custom-control custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="customCheck1">
                                     <label class="custom-control-label" for="customCheck1"></label>
                                     </div></td>
                                <td>Gestionar</td>
                            </tr><tr class="even">
                                <td class="sorting_1 dtr-control">02</td>
                                <td>Marco Botton Tuttofare</td>
                                <td>Proceso matricula</td>
                                <td>Guamal</td>
                                <td>38</td>
                                <td></td>
                                <td><div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                     <label class="custom-control-label" for="customCheck2"></label>
                                     </div></td>
                                <td>Gestionar</td>
                            </tr><tr class="odd">
                                <td class="sorting_1 dtr-control">03</td>
                                <td>Mariah Maclac Better Half</td>
                                <td>Aspirante</td>
                                <td>Restrepo</td>
                                <td>41</td>
                                <td></td>
                                <td><div class="custom-control custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="customCheck3">
                                     <label class="custom-control-label" for="customCheck3"></label>
                                     </div></td>
                                <td>Gestionar</td>
                            </tr><tr class="even">
                                <td class="sorting_1 dtr-control">04</td>
                                <td>Valerie Liberty Head chef</td>
                                <td>Prospecto</td>
                                <td>Villavicencio</td>
                                <td>20</td>
                                <td></td>
                                <td><div class="custom-control custom-checkbox">
                                     <input type="checkbox" class="custom-control-input" id="customCheck4">
                                     <label class="custom-control-label" for="customCheck4"></label>
                                     </div></td>
                                <td>Gestionar</td>
                            </tr></tbody>

                    </table></div></div><div class="row"  id="ocultar2">
                    <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
                    <ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable-buttons_previous"><a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable-buttons" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable-buttons_next"><a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
                                       


@endsection
@section('script')

<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/bootstrap/bootstrap.min.js"></script>
 <script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/metismenu/metismenu.min.js"></script>
 <script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/jquery/jquery.min.js"></script><script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/simplebar/simplebar.min.js"></script>
 <script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/node-waves/node-waves.min.js"></script>
 <script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/waypoints/waypoints.min.js"></script>
 <script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/jquery-counterup/jquery-counterup.min.js"></script>

     <script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.js"></script>
    <script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/jszip/jszip.min.js"></script>
    <script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/pdfmake/pdfmake.min.js"></script>
    <script src="http://minible-v-light.laravel.themesbrand.com/assets/js/pages/datatables.init.js"></script>

 <!-- App js -->
 <script src="http://minible-v-light.laravel.themesbrand.com/assets/js/app.min.js"></script>

@endsection
      