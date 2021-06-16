@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('css')

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
                                <td>  <a href="" type="button"  data-bs-toggle="modal" data-bs-target=".bs-modal-genoportunidad-xl">Gestionar</a></td>
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
                                     <td>  <a href="" type="button"  data-bs-toggle="modal" data-bs-target=".bs-modal-genoportunidad-xl">Gestionar</a></td>
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
                                     <td>  <a href="" type="button"  data-bs-toggle="modal" data-bs-target=".bs-modal-genoportunidad-xl">Gestionar</a></td>
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
                                     <td>  <a href="" type="button"  data-bs-toggle="modal" data-bs-target=".bs-modal-genoportunidad-xl">Gestionar</a></td>
                            </tr></tbody>

                    </table></div></div>
                    </div>
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



      <script src="http://minible-v-light.laravel.themesbrand.com/assets/js/app.min.js"></script>
@endsection
      