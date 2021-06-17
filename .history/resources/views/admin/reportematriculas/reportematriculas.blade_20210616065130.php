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
    @slot('pagetitle') Ver mi Gestion @endslot
    @slot('title') Ver mi Gestion @endslot
@endcomponent 
@section('breadcrumbs')
    {{ Breadcrumbs::render('reportematriculas') }}
@endsection


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-start justify-content-start">
                    <div class="row align-items-start justify-content-start">
                        <div class="col-lg-6">

                                
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
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 148px;" aria-sort="ascending" aria-label="nombre: activate to sort column descending">Nombre</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 226px;" aria-label="fecha: activate to sort column ascending">Fecha de matricula</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 106px;" aria-label="Numeroerror: activate to sort column ascending">Numero de error en el proceso</th>
                                    </thead>
                                        <tbody>                             
                                        <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">Giacomo Guillizi Founder & CEO</td>
                                        <td>16-06-2021</td>
                                        <td>10</td>
                                        </tr><tr class="even">
                                        <td class="sorting_1 dtr-control">Marco Botton Tuttofare</td>
                                        <td>16-06-2021</td>
                                        <td>2</td>
                                        </tr><tr class="odd">
                                        <td class="sorting_1 dtr-control">Mariah Maclac Better Half</td>
                                        <td>16-06-2021</td>
                                        <td>0</td>
                                        </tr><tr class="even">
                                        <td class="sorting_1 dtr-control">Valerie Liberty Head chef</td>
                                        <td>16-06-2021</td>
                                        <td>0</td>
                                        </tr></tbody>
                                        </table></div></div><div class="row"  id="ocultar2">
                                    <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                <ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable-buttons_previous"><a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable-buttons" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable-buttons" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable-buttons_next"><a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                                    <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
                    

                        </div>
                    </div>
                        <div class="row"><br></div>
                    <div class="row align-items-start justify-content-start">
                        <div class="col-lg-6">
                            <div id="stocks-div"></div>
                        </div>
                        <div class="col-lg-6">
                            <div id="stocks2-div"></div>
                        <div>    
                    </div>    

                </div><!-- end ROW -->
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
      