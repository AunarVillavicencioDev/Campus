@extends('layouts.master-without-nav')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')



                                       
<div class="row align-items-center justify-content-center">
    <div class="col-xl-12 ">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center justify-content-center">

                    <div class="col-xl-5">
                        <div class="row">

                            <div class="col-xl-4">
                            <p><b> espacio del logo</b></p>
                            </div>
                            <div class="col-xl-7">
                            <p><b> CORPORACIÓN UNIVERSITARIA AUTONOMA DE 
                            <br> NARIÑO "AUNAR"
                            <br> 891.224.762-5
                            <br> kr 48 sur cll 1 km 1 anillo vial/ via acacias - Tel:
                            <br> 6823030</b></p>
                            <p><b> ORDEN DE PAGO N° 21059</b></p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="row">

                            <div class="col-xl-4">
                            <p><b> espacio del logo</b></p>
                            </div>
                            <div class="col-xl-7">
                            <p><b> CORPORACIÓN UNIVERSITARIA AUTONOMA DE 
                            <br> NARIÑO "AUNAR"
                            <br> 891.224.762-5
                            <br> kr 48 sur cll 1 km 1 anillo vial/ via acacias - Tel:
                            <br> 6823030
                            <br> ORDEN DE PAGO N° 21059</b></p>
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