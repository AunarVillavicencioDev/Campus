@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('css')

@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Reporte de Matriculas @endslot
    @slot('title') Reporte de Matriculas @endslot
@endcomponent 



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-start justify-content-center">



                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>


@endsection
@section('script')
      <script src="http://minible-v-light.laravel.themesbrand.com/assets/js/app.min.js"></script>
@endsection
      