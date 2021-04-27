@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Carga de Documentos @endslot
    @slot('title') Carga de Documentos @endslot
@endcomponent 
{!! Form::open(['url' => 'cargadedocumentos/cargadocumentos', 'files' => true]) !!}

                                       
<div class="row align-items-center justify-content-center">
<div class="col-xl-12 ">
        <div class="card">
            <div class="card-body"> 
          
                                
              </div>
            </div>
        </div>
    </div> <!-- end row-->
    


{!! Form::close() !!} 
@endsection
@section('script')
       <!-- apexcharts -->
       <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

       <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection