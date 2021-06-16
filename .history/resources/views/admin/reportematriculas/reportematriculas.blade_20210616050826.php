@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('css')
<link href="http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.css" rel="stylesheet" type="text/css">
<style>
#ocultar3{visibility:hidden;}
</style>
@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Ver mi Gestion @endslot
    @slot('title') Ver mi Gestion @endslot
@endcomponent 



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-start justify-content-start">
                <div class="col-lg-6">
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
                        </thead>
                        <tbody>                             
                        <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">01</td>
                                <td>Giacomo Guillizi Founder & CEO</td>
                                <td>Oportunidad</td>
                                 </tr><tr class="even">
                                <td class="sorting_1 dtr-control">02</td>
                                <td>Marco Botton Tuttofare</td>
                                <td>Proceso matricula</td>
                                  </tr><tr class="odd">
                                <td class="sorting_1 dtr-control">03</td>
                                <td>Mariah Maclac Better Half</td>
                                <td>Aspirante</td>
                                  </tr><tr class="even">
                                <td class="sorting_1 dtr-control">04</td>
                                <td>Valerie Liberty Head chef</td>
                                <td>Prospecto</td>
                                 </tr></tbody>

                    </table></div></div>
                    
                </div>
                <div class="row">
                <br>
                </div>
                <div class="row align-items-start justify-content-start">
                    <div class="col-lg-6">
                        <div id="stocks-div"></div>
                    </div>
                    <div class="col-lg-6">
                        <div id="stocks2-div"></div>
                    </div>    
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>

@endsection

@linechart('Stocks2', 'stocks2-div')
@columnchart('Stocks', 'stocks-div')



@section('script')

<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.js"></script>
    <script src="http://minible-v-light.laravel.themesbrand.com/assets/js/pages/datatables.init.js"></script>
 <script src="http://minible-v-light.laravel.themesbrand.com/assets/js/app.min.js"></script>
@endsection
      