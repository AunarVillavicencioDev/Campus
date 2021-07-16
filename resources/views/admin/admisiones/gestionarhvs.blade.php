<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('css')
<link href="http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.css" rel="stylesheet" type="text/css">
<style>
    #ocultar1{visibility:hidden;}
    #ocultar2{visibility:hidden;}
    #ocultar3{visibility:hidden;}
</style>
@endsection
@section('content')
@component('common-components.breadcrumb')
@slot('title'){{trans("hv.names")}}  @endslot
@slot('breadcrumb') {{Breadcrumbs::render(trans("hv.names"))}} @endslot
@endcomponent 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"></h4>
                <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="datatable-buttons" class="table  table-hover table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 148px;" aria-sort="ascending" aria-label="Id Oportunidad: activate to sort column descending">Id Oportunidad</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 226px;" aria-label="Nombre: activate to sort column ascending">Nombre</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 106px;" aria-label="Estado: activate to sort column ascending">Estado</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 91px;" aria-label="Gestionar: activate to sort column ascending">Gestionar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dboportunidades as $items)                                
                                    <tr>
                                        <td class="dtr-control sorting_1" tabindex="0">{{Helper::consultDataOpportuni($items->id)->id}}</td>
                                        <td>{{Helper::consultDataOpportuni($items->id)->name}}</td>
                                        <td>{{Helper::consultDataOpportuni($items->id)->estado}}</td>
                                        <td>  <a href="" type="button"  data-bs-toggle="modal" data-bs-target=".bs-modal-genhojadevida-xl{{Helper::consultDataOpportuni($items->id)->id}}">Gestionar</a></td>
                                    </tr>
                                    @component('common-components.modal_hojadevida.gen_hojadevida')
                                    @slot('id_oportunidad') {{Helper::consultDataOpportuni($items->id)->id}} @endslot 
                                    @slot('nombre') {{Helper::consultDataOpportuni($items->id)->name}}@endslot
                                    @slot('idusuario') {{Helper::consultDataOpportuni($items->id)->user_id}}@endslot
                                    @slot('edad') {{Helper::consultDataOpportuni($items->id)->edad}} @endslot
                                    @slot('direcciondomicilio') {{Helper::consultDataOpportuni($items->id)->direccion}} @endslot
                                    @slot('barrio') barrio @endslot
                                    @slot('departamento') {{Helper::consultDataOpportuni($items->id)->departamento}} @endslot
                                    @slot('municipio') {{Helper::consultDataOpportuni($items->id)->municipio}} @endslot
                                    @slot('celular') {{Helper::consultDataOpportuni($items->id)->movil}} @endslot
                                    @slot('telefono') 30000000 @endslot
                                    @endcomponent
                                    @endforeach    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row"  id="ocultar2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

@endsection