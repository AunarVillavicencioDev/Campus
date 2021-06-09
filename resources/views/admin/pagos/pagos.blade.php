@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
<head>
    <link href= "http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.css"    rel="stylesheet" type="text/css">
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <style>
        .col-sm-12.col-md-6,.col-sm-12.col-md-5,.col-sm-12.col-md-7 {
            visibility: hidden;
        }
    </style>
</head>

@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') Pagos @endslot
@slot('title') Pagos @endslot
@endcomponent 




<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-modal-genFactura-xl">Generar Factura</button>
            </div>
        </div>

        &nbsp 
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-12">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable-buttons_info">                        
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 105px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Pagos</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 164px;" aria-label="Position: activate to sort column ascending">Fecha</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 72px;" aria-label="Office: activate to sort column ascending">Entidad de Pago</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 26px;" aria-label="Age: activate to sort column ascending">realizar Pago</th>
                                </tr>
                            </thead>
                            <tbody>     
                                <tr class="odd">
                                    <td  tabindex="0">Inscripción</td>
                                    <td>01-03-2021</td>
                                    <td>Consuerte</td>
                                    <td><a href="#">link1</a></td>                                
                                </tr>
                                <tr class="even">
                                    <td >Matricula</td>
                                    <td>02-03-2021</td>
                                    <td>Consuerte2</td>
                                    <td><a href="#">link2</a></td>                                
                                </tr>
                                <tr class="odd">
                                    <td  tabindex="0">Inscripción 2</td>
                                    <td>03-03-2021</td>
                                    <td>Consuerte3</td>
                                    <td><a href="#">link3</a></td>                                
                                </tr>
                                <tr class="even">
                                    <td >Matricula 2</td>
                                    <td>04-03-2021</td>
                                    <td>Consuerte4</td>
                                    <td><a href="#">link4</a></td>                                
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>                   
            </div>
        </div>
    </div>
</div> <!-- end col -->



@component('common-components.modal.pagos.genFactura') 
@endcomponent
@endsection
@section('script')

<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection