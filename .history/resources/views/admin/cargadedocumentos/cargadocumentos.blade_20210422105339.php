@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Carga de Documentos @endslot
    @slot('title') Carga de Documentos @endslot
@endcomponent 


                                       
<div class="row align-items-center justify-content-center">
    <div class="col-xl-12 ">
        <div class="card">
            <div class="card-body">
                <form class> 
                {!! Form::open(['url' => 'cargadedocumentos/cargadocumentos', 'files' => true]) !!}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            {{ Form::label($name, null, ['class' => 'control-label']) }}
                            {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
                        </div>

                    </div>   
                </div>
                <div class="row">
                    <div class="col-lg-6">


                    </div>   
                </div>
                {!! Form::close() !!} 
                </form>                
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