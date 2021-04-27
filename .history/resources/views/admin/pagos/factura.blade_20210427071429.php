@extends('layouts.master-without-nav')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
<head>
<link href= "http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.css"    rel="stylesheet" type="text/css">
<link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
<style>
 .b1{
    border-left-style: none;
 }
 .b2{
     border:none;}
</style>
</head>


                                       
<div class="row align-items-start justify-content-center">
    <div class="col-xl-12 ">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-start justify-content-center">

                    <div class="col-xl-5">

                        <div class="row">
                            <div class="col-xl-4">
                            <p><b> espacio del logo</b></p>
                            </div>
                            <div class="col-xl-7">
                            <p style="text-align:center;"><b> CORPORACIÓN UNIVERSITARIA AUTONOMA DE 
                            <br> NARIÑO "AUNAR"
                            <br> 891.224.762-5
                            <br> kr 48 sur cll 1 km 1 anillo vial/ via acacias - Tel:
                            <br> 6823030</b></p>
                            <p style="text-align:right;"><b> ORDEN DE PAGO N° 21059</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                            <p style="text-align:Left;">
                            <b>Fecha:
                            <br> Estudiante:
                            <br> Identificacion: 
                            <br> Telefono:
                            <br> Direccion:
                            <br> Programa: 
                            <br> Periodo:
                            </b></p>
                            </div>
                            <div class="col-xl-7">
                            <p style="text-align:Left;">
                            15/03/2021
                            <br> Apellido1 Apellido2 javier Andres
                            <br> C.C 1170381881 
                            <br> 3213474049
                            <br> Calle 18 00 32
                            <br> Profesional En Contaduria Publica (SNIES 102322)
                            <br> 2021 2
                            </p>
                            </div>
                        </div>
                        <div class="row">
                        <div class="table-responsive">
                        <table class="table mb-0 table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>CONCEPTO</th>
                                    <th>VALOR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                    
                                    <td>Profesional En Contaduria Publica Cod 102322</td>
                                    <td>$ 400.000</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        </div>

                    </div>
                    <div class="col-xl-5">

                        <div class="row">
                            <div class="col-xl-4">
                            <p><b> espacio del logo</b></p>
                            </div>
                            <div class="col-xl-7">
                            <p style="text-align:center;"><b> CORPORACIÓN UNIVERSITARIA AUTONOMA DE 
                            <br> NARIÑO "AUNAR"
                            <br> 891.224.762-5
                            <br> kr 48 sur cll 1 km 1 anillo vial/ via acacias - Tel:
                            <br> 6823030</b></p>
                            <p style="text-align:right;"><b> ORDEN DE PAGO N° 21059</b></p>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                            <p style="text-align:Left;">
                            <b>Fecha:
                            <br> Estudiante:
                            <br> Identificacion: 
                            <br> Telefono:
                            <br> Direccion:
                            <br> Programa: 
                            <br> Periodo:
                            </b></p>
                            </div>
                            <div class="col-xl-7">
                            <p style="text-align:Left;">
                            15/03/2021
                            <br> Apellido1 Apellido2 javier Andres
                            <br> C.C 1170381881 
                            <br> 3213474049
                            <br> Calle 18 00 32
                            <br> Profesional En Contaduria Publica (SNIES 102322)
                            <br> 2021 2
                            </p>
                            </div>
                        </div>
                        <div class="row">
                        <div class="table-responsive ">
                        <table class="table mb-4 table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th></th>
                                    <th>PAGUE HASTA</th>
                                    <th>VALOR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                    
                                    <td>PAGO ORDINARIO</td>
                                    <td>31/03/2021</td>
                                    <td>$ 400.000</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        </div>
                        <div class="row">
                        <div class="table ">
                        <table class="table mb-0 table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>BANCO</th>
                                    <th>CHEQUE N°</th>
                                    <th>VALOR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                    
                                    <td ></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>                                    
                                    <td class="b2"></td>
                                    <td class="b1">CHEQUE</td>
                                    <td></td>
                                </tr>
                                <tr>                                    
                                    <td class="b2"></td>
                                    <td class="b1">EFECTIVO</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        </div>

                    </div>
                        
                       
                </div>             
            </div>
        </div>
    </div>
</div> <!-- end row-->
    



@endsection
@section('script')
       <!-- apexcharts -->
       <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

       <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection