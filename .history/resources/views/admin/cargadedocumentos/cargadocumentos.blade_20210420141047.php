@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Carga de Documentos @endslot
    @slot('title') Carga de Documentos @endslot
@endcomponent 

<div class="row">
{!! Form::open(['url' => 'foo/bar']) !!}
{!!  Form::select('size', ['L' => 'tipo de solicitud', 'S' => 'Small'], 'S'); !!}
{!! Form::close() !!}
</div>
@endsection
@section('script')
       <!-- apexcharts -->
       <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

       <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection