@extends('layouts.master-without-nav')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
<head>
<link href= "http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.css"    rel="stylesheet" type="text/css">
<link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+128&display=swap" rel="stylesheet">
<style>
table{
    border: 1px solid black;
}
 .b1{
    border-left-style: none;
    text-align:right;
    font-weight: bold;
 }
 .b2{
     border:none;
}
.b3{
    border-left-style: none;
    text-align:right;
}

</style>
</head>
@php
    $codigodebarras = "31-03-2021/Nombre/117038188/102322";
    $debajocodigobarras="31032021117038188102322";
    @endphp   

                                       
<div class="row align-items-start justify-content-center">
    <div class="col-xl-12 ">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-start justify-content-center">

                    <div class="col-xl-5 " >
                    <div class="row align-items-start justify-content-center">    
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
                            <br> 2021-2
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
                        <p><br><br><br><br></p>
                        <div class="row">
                        <div class="table-responsive ">
                        <table class="table mb-0 table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th></th>
                                    <th>PAGUE HASTA</th>
                                    <th class="b3">VALOR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                                    
                                    <td>PAGO ORDINARIO</td>
                                    <td>31/03/2021</td>
                                    <td class="b3">$ 400.000</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        </div>
                        <div class="row align-items-end justify-content-left">
                        <p><br><br><br><br><br>Medios de pago</p>
                        </div>

                    </div>                
                    </div>
                    <div class="col-xl-5" style="border-left: dotted;">
                    <div class="row align-items-start justify-content-center">
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
                            <br> 2021-2
                            </p>
                            </div>
                        </div>
                        <div class="row">
                        <div class="table-responsive ">
                        <table class="table mb-0 table-bordered">
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
                        <p>&ensp;</p>
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
                                <tr class="b3">                                    
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
                                 <table>
                                    <td class="b2">HASTA 31/03/2021</td>
                                    <td class="b2">TOTAL A PAGAR</td>
                                    <td class="b1">$15.100</td>
                                    
                                <table>
                        </div>
                        </div>

                    </div>            
                    </div>        
                </div> 
                <div class="row align-items-center justify-content-center">
                     <div class="col-xl-2"> 
                     <button type="button" class="btn btn-primary btn-lg waves-effect waves-light"> Generar Factura</button>
                     </div>
                     <div class="col-xl-2">  
                     <button type="button" class="btn btn-primary btn-lg waves-effect waves-light"> Generar Factura</button>
                     </div>
                     <div class="col-xl-2">  
                     <button type="button" class="btn btn-primary btn-lg waves-effect waves-light"> Generar Factura</button>
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