@extends('layouts.master-without-nav')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')



                                       
<div class="row align-items-center justify-content-center">
    <div class="col-xl-12 ">
        <div class="card">
            <div class="card-body">

                <div class="row">

                    <div class="col-ms-6">
                        <div class="row">
                            <div class="col-xl-1">
                            <p><b> espacio del logo"</b></p>
                            </div>
                            <div class="col-xl-5">
                            <p><b> CORPORACIÓN UNIVERSITARIA AUTONOMA DE &nbsp NARIÑO "AUNAR"</b></p>
                            </div>

                        </div>
                    </div>
                    <div class="col-ms-6">
                        <div class="row">
                        
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