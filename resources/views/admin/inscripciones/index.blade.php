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
                {!! Form::open(['url' => 'foo/bar']) !!}
                <div id="basic-example">
                    <!-- Seller Details -->
                    <h3>@lang('inscripcion.tap_uno')</h3>
                    <section>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="basicpill-firstname-input">First name</label>
                                    <input type="text" class="form-control" id="basicpill-firstname-input">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="basicpill-lastname-input">Last name</label>
                                    <input type="text" class="form-control" id="basicpill-lastname-input">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="basicpill-phoneno-input">Phone</label>
                                    <input type="text" class="form-control" id="basicpill-phoneno-input">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="basicpill-email-input">Email</label>
                                    <input type="email" class="form-control" id="basicpill-email-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="basicpill-address-input">Address</label>
                                    <textarea id="basicpill-address-input" class="form-control" rows="2"></textarea>
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
                                    <label for="basicpill-pancard-input">PAN Card</label>
                                    <input type="text" class="form-control" id="basicpill-pancard-input">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="basicpill-vatno-input">VAT/TIN No.</label>
                                    <input type="text" class="form-control" id="basicpill-vatno-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="basicpill-cstno-input">CST No.</label>
                                    <input type="text" class="form-control" id="basicpill-cstno-input">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="basicpill-servicetax-input">Service Tax No.</label>
                                    <input type="text" class="form-control" id="basicpill-servicetax-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="basicpill-companyuin-input">Company UIN</label>
                                    <input type="text" class="form-control" id="basicpill-companyuin-input">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="basicpill-declaration-input">Declaration</label>
                                    <input type="text" class="form-control" id="basicpill-Declaration-input">
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
                                        <label for="basicpill-namecard-input">Name on Card</label>
                                        <input type="text" class="form-control" id="basicpill-namecard-input">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label>Credit Card Type</label>
                                        <select class="form-select">
                                            <option selected>Select Card Type</option>
                                            <option value="AE">American Express</option>
                                            <option value="VI">Visa</option>
                                            <option value="MC">MasterCard</option>
                                            <option value="DI">Discover</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-cardno-input">Credit Card Number</label>
                                        <input type="text" class="form-control" id="basicpill-cardno-input">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-card-verification-input">Card Verification
                                            Number</label>
                                        <input type="text" class="form-control"
                                               id="basicpill-card-verification-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="basicpill-expiration-input">Expiration Date</label>
                                        <input type="text" class="form-control" id="basicpill-expiration-input">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>
                {!! Form::close() !!}
            </div>
            <!-- end card body -->
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
@endsection