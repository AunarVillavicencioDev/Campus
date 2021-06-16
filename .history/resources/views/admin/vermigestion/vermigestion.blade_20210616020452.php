@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('css')

@endsection

@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Listado General @endslot
    @slot('title') Listado General @endslot
@endcomponent 



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                    
                 
            </div>
        </div>
    </div> <!-- end col -->
</div>
@component('common-components.modal.gen_hojadevida')
    @slot('nombre') Giacomo Guillizoni @endslot
    @slot('edad') 3 @endslot
    @slot('direcciondomicilio') Calle marte junto a pluton @endslot
    @slot('barrio') Jordan @endslot
    @slot('departamento') Meta @endslot
    @slot('municipio') Villavicencio @endslot
    @slot('celular') 100 000 0000 @endslot
    @slot('telefono') 036 1234567 @endslot
@endcomponent
   

@endsection
@section('script')
     
 <script src="http://minible-v-light.laravel.themesbrand.com/assets/js/app.min.js"></script>
@endsection
      