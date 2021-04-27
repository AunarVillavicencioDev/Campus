@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
<head>
<link href="http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.css" rel="stylesheet" type="text/css"></head>
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Pagos @endslot
    @slot('title') Pagos @endslot
@endcomponent 




<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
               
            </div>
        </div>

    &nbsp 
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                               
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
                                <td class="dtr-control sorting_1" tabindex="0">Inscripción</td>
                                <td>2008/11/28</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>                                
                            </tr>
                            <tr class="even">
                                <td class="sorting_1 dtr-control">Angelica Ramos</td>
                                <td>2009/10/09</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>                                
                            </tr>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">Ashton Cox</td>
                                <td>2009/01/12</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>                                
                            </tr>
                            <tr class="even">
                                <td class="sorting_1 dtr-control">Bradley Greer</td>
                                <td>2012/10/13</td>
                                <td>Software Engineer</td>
                                <td>London</td>                                
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>                   
            </div>
        </div>
    </div>
</div> <!-- end col -->
   
                                       


@endsection
@section('script')
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/jquery/jquery.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/bootstrap/bootstrap.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/metismenu/metismenu.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/simplebar/simplebar.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/node-waves/node-waves.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/waypoints/waypoints.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/jquery-counterup/jquery-counterup.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/jszip/jszip.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/pdfmake/pdfmake.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/js/pages/datatables.init.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/js/app.min.js"></script>

       <!-- apexcharts -->
       <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

       <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection