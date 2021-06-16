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
@section('script')

{!! \Lava::render('LineChart', 'Stocks', 'stocks-div'); !!}
@donutchart('Stocks2', 'stocks2-div')

      <script src="http://minible-v-light.laravel.themesbrand.com/assets/js/app.min.js"></script>
@endsection
      