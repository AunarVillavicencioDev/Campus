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
                <div class="row align-items-start justify-content-center">

                <div id="stocks-div"></div>

                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>

   

@endsection
@section('script')
<?= $lava->render('LineChart', 'Stocks', 'stocks-div'); ?>
      <script src="http://minible-v-light.laravel.themesbrand.com/assets/js/app.min.js"></script>
@endsection
      