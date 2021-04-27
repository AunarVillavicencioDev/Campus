<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
@extends('layouts.master')
@section('title') @lang('inscripcion.name') @endsection
@section('content')
@component('common-components.breadcrumb')
@slot('pagetitle') @lang('dashboard.name') @endslot
@slot('title') @lang('inscripcion.names') @endslot
@endcomponent 
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {!! Form::open(['route' => 'inscripcion.store']) !!}
                <div id="basic-example">
                    <!-- Seller Details -->
                    <h3>@lang('inscripcion.tap_uno')</h3>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('pri_nombre', null , ['placeholder' => 'Requerido'], __('inscripcion.pri_nombre')) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('seg_nombre', null , ['placeholder' => 'Requerido'], __('inscripcion.seg_nombre')) }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('pri_apellido', null , ['placeholder' => 'Requerido'], __('inscripcion.pri_apellido')) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('seg_apellido', null , ['placeholder' => 'Requerido'], __('inscripcion.seg_apellido')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::label('fecha_nacimientos', __('inscripcion.fecha_nacimientos'), ['class' => 'control-label']) }}
                                    {{ Form::date('fecha_nacimientos', \Carbon\Carbon::now(), array_merge(['class' => 'form-control'])) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::label('pais_nacimiento', __('inscripcion.pais_nacimiento'), ['class' => 'control-label']) }}
                                    {{ Form::select('pais_nacimiento', $paises,@old('pais_nacimiento'), ['class' => 'form-control', 'placeholder' => 'Selecione una opcion']) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('deparatamento_nacimiento', null , ['placeholder' => 'Requerido'], __('inscripcion.deparatamento_nacimiento')) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('municipio_nacimiento', null , ['placeholder' => 'Requerido'], __('inscripcion.municipio_nacimiento')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::label('fecha_expedicion', __('inscripcion.fecha_expedicion'), ['class' => 'control-label']) }}
                                    {{ Form::date('fecha_expedicion', \Carbon\Carbon::now(), array_merge(['class' => 'form-control'])) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('pais_expedicion', null , ['placeholder' => 'Requerido'], __('inscripcion.pais_expedicion')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('deparatamento_expedicion', null , ['placeholder' => 'Requerido'], __('inscripcion.deparatamento_expedicion')) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('municipio_expedicion', null , ['placeholder' => 'Requerido'], __('inscripcion.municipio_expedicion')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('direcion_recidencia', null , ['placeholder' => 'Requerido'], __('inscripcion.direcion_recidencia')) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('pais_recidencia', null , ['placeholder' => 'Requerido'], __('inscripcion.pais_recidencia')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('deparatamento_recidencia', null , ['placeholder' => 'Requerido'], __('inscripcion.deparatamento_recidencia')) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('municipio_recidencia', null , ['placeholder' => 'Requerido'], __('inscripcion.municipio_recidencia')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('genero', null , ['placeholder' => 'Requerido'], __('inscripcion.genero')) }}
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Company Document -->
                    <h3>@lang('inscripcion.tap_dos')</h3>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('programa_id', null , ['placeholder' => 'Requerido'], __('inscripcion.programa_id')) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('periodo_academico', null , ['placeholder' => 'Requerido'], __('inscripcion.periodo_academico')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('jornada', null , ['placeholder' => 'Requerido'], __('inscripcion.jornada')) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::label('fecha_saber', __('inscripcion.fecha_saber'), ['class' => 'control-label']) }}
                                    {{ Form::date('fecha_saber', \Carbon\Carbon::now(), array_merge(['class' => 'form-control'])) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('codigo_saber', null , ['placeholder' => 'Requerido'], __('inscripcion.codigo_saber')) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('puntaje_saber', null , ['placeholder' => 'Requerido'], __('inscripcion.puntaje_saber')) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('colegio', null , ['placeholder' => 'Requerido'], __('inscripcion.colegio')) }}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    {{ Form::gText('nivel_academico', null , ['placeholder' => 'Requerido'], __('inscripcion.nivel_academico')) }}
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Bank Details -->
                    <h3>@lang('inscripcion.tap_tres')</h3>
                    <section>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        {{ Form::gText('estado_civil', null , ['placeholder' => 'Requerido'], __('inscripcion.estado_civil')) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        {{ Form::gText('rh', null , ['placeholder' => 'Requerido'], __('inscripcion.rh')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        {{ Form::gText('estrato', null , ['placeholder' => 'Requerido'], __('inscripcion.estrato')) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        {{ Form::gText('discapacidad', null , ['placeholder' => 'Requerido'], __('inscripcion.discapacidad')) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        {{ Form::gText('numero_de_hijos', null , ['placeholder' => 'Requerido'], __('inscripcion.numero_de_hijos')) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        {{ Form::gText('libreta_militar', null , ['placeholder' => 'Requerido'], __('inscripcion.libreta_militar')) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                {!! Form::close() !!}
            </div>
            <!-- end card                         body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->

@endsection
@section('script')
<!-- jquery-steps js -->
<script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-wizard.init.js') }}"></script>
<script src="{{ URL::asset('/js/pages/inscripcion.js') }}"></script>
@endsection