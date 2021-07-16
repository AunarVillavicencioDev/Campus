<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
<head>
    <link href = "http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.css" rel = "stylesheet" type = "text/css">
    <style>
        #ocultar1{visibility:hidden;}
        #ocultar2{visibility:hidden;}
        #ocultar3{visibility:hidden;}
    </style>
</head>

@section('content')
@component('common-components.breadcrumb')
@slot('title'){{trans("listadoGeneral.name")}} @endslot
@slot('breadcrumb') {{Breadcrumbs::render(trans("listadoGeneral.name"))}} @endslot
@endcomponent
@php
use App\Helpers\Status;
@endphp

<div class = "row">
    <div class = "col-12">
        <div class = "card">
            <div class = "card-body">

                <h4 class = "card-title"></h4>


                <div id = "datatable-buttons_wrapper" class = "dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class = "row">
                        <div class = "col-sm-12 col-md-6" id = "ocultar1">
                            <div class = "dt-buttons btn-group flex-wrap">
                                <button class = "btn btn-secondary buttons-copy buttons-html5" tabindex = "0" aria-controls = "datatable-buttons" type = "button">
                                    <span>Copy</span>
                                </button>
                                <button class = "btn btn-secondary buttons-excel buttons-html5" tabindex = "0" aria-controls = "datatable-buttons" type = "button">
                                    <span>Excel</span>
                                </button>
                                <button class = "btn btn-secondary buttons-pdf buttons-html5" tabindex = "0" aria-controls = "datatable-buttons" type = "button">
                                    <span>PDF</span>
                                </button>
                                <div class = "btn-group">
                                    <button class = "btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex = "0" aria-controls = "datatable-buttons" type = "button" aria-haspopup = "true" aria-expanded = "false">
                                        <span>Column visibility</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class = "col-sm-12 col-md-6" id = "ocultar3"><div id = "datatable-buttons_filter" class = "dataTables_filter"><label>Search:<input type = "search" class = "form-control form-control-sm" placeholder = "" aria-controls = "datatable-buttons"></label></div></div></div>
                    <div class = "row"><div class = "col-sm-12"><table id = "datatable-buttons" class = "table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style = "border-collapse: collapse; border-spacing: 0px; width: 100%;" role = "grid" aria-describedby = "datatable-buttons_info">
                                <thead>
                                    <tr role = "row">
                                        <th class = "sorting_asc" tabindex = "0" aria-controls = "datatable-buttons" rowspan = "1" colspan = "1" style = "width: 148px;" aria-sort = "ascending" aria-label = "Id Oportunidad: activate to sort column descending">Id Oportunidad</th>
                                        <th class = "sorting" tabindex = "0" aria-controls = "datatable-buttons" rowspan = "1" colspan = "1" style = "width: 226px;" aria-label = "Nombre: activate to sort column ascending">Nombre</th>
                                        <th class = "sorting" tabindex = "0" aria-controls = "datatable-buttons" rowspan = "1" colspan = "1" style = "width: 106px;" aria-label = "Estado: activate to sort column ascending">Estado</th>
                                        <th class = "sorting" tabindex = "0" aria-controls = "datatable-buttons" rowspan = "1" colspan = "1" style = "width: 35px;" aria-label = "Ciudad: activate to sort column ascending">Ciudad</th>
                                        <th class = "sorting" tabindex = "0" aria-controls = "datatable-buttons" rowspan = "1" colspan = "1" style = "width: 95px;" aria-label = "Edad: activate to sort column ascending">Edad</th>
                                        <th class = "sorting" tabindex = "0" aria-controls = "datatable-buttons" rowspan = "1" colspan = "1" style = "width: 91px;" aria-label = "Colegio: activate to sort column ascending">Colegio</th>
                                        <th class = "sorting" tabindex = "0" aria-controls = "datatable-buttons" rowspan = "1" colspan = "1" style = "width: 91px;" aria-label = "Homologa: activate to sort column ascending">Homologa</th>
                                        <th class = "sorting" tabindex = "0" aria-controls = "datatable-buttons" rowspan = "1" colspan = "1" style = "width: 91px;" aria-label = "agente: activate to sort column ascending">agente</th>
                                        <th class = "sorting" tabindex = "0" aria-controls = "datatable-buttons" rowspan = "1" colspan = "1" style = "width: 91px;" aria-label = "procesos completos: activate to sort column ascending">Procesos Completos</th>
                                        <th class = "sorting" tabindex = "0" aria-controls = "datatable-buttons" rowspan = "1" colspan = "1" style = "width: 91px;" aria-label = "Gestionar: activate to sort column ascending">Gestionar</th></tr>
                                </thead>


                                <tbody>
                                    @foreach($dbinscripciones as $items)
                                    <tr class = "odd">
                                        <td class = "dtr-control sorting_1" tabindex = "0">{{$items->id}}</td>
                                        <td>{{$items->pri_nombre}} {{$items->seg_nombre}} {{$items->pri_apellido}} {{$items->seg_apellido}}</td>
                                        <td>{{Helper::estadoinscription($items->status)}}</td>
                                        <td>{{$items->municipio_recidencia}}</td>
                                        <td>Falta esto</td>
                                        <td>{{$items->colegio}}</td>
                                        <td>
                                            <div class = "custom-control custom-checkbox">
                                                <input type = "checkbox" class = "custom-control-input" id = "customCheck1">
                                                <label class = "custom-control-label" for = "customCheck1"></label>
                                            </div></td>
                                        <td>Falta esto</td>
                                        <td>Falta esto</td>
                                        <td>Gestionar</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table></div></div><div class = "row" id = "ocultar2">
                        <div class = "col-sm-12 col-md-5">
                            <div class = "dataTables_info" id = "datatable-buttons_info" role = "status" aria-live = "polite">Showing 1 to 10 of 57 entries</div>
                        </div>
                        <div class = "col-sm-12 col-md-7">
                            <div class = "dataTables_paginate paging_simple_numbers" id = "datatable-buttons_paginate">
                                <ul class = "pagination"><li class = "paginate_button page-item previous disabled" id = "datatable-buttons_previous"><a href = "#" aria-controls = "datatable-buttons" data-dt-idx = "0" tabindex = "0" class = "page-link">Previous</a></li><li class = "paginate_button page-item active"><a href = "#" aria-controls = "datatable-buttons" data-dt-idx = "1" tabindex = "0" class = "page-link">1</a></li><li class = "paginate_button page-item "><a href = "#" aria-controls = "datatable-buttons" data-dt-idx = "2" tabindex = "0" class = "page-link">2</a></li><li class = "paginate_button page-item "><a href = "#" aria-controls = "datatable-buttons" data-dt-idx = "3" tabindex = "0" class = "page-link">3</a></li><li class = "paginate_button page-item "><a href = "#" aria-controls = "datatable-buttons" data-dt-idx = "4" tabindex = "0" class = "page-link">4</a></li><li class = "paginate_button page-item "><a href = "#" aria-controls = "datatable-buttons" data-dt-idx = "5" tabindex = "0" class = "page-link">5</a></li><li class = "paginate_button page-item "><a href = "#" aria-controls = "datatable-buttons" data-dt-idx = "6" tabindex = "0" class = "page-link">6</a></li><li class = "paginate_button page-item next" id = "datatable-buttons_next"><a href = "#" aria-controls = "datatable-buttons" data-dt-idx = "7" tabindex = "0" class = "page-link">Next</a></li></ul></div></div></div></div>
            </div>
        </div>
    </div> <!--end col -->
</div>



@endsection
@section('script')
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/jszip/jszip.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/pdfmake/pdfmake.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/js/pages/datatables.init.js"></script>

@endsection