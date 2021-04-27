@extends('layouts.master')
@section('title') @lang('translation.Dashboard') @endsection
<head>
<link href="http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.css" rel="stylesheet" type="text/css">
@section('content')
@component('common-components.breadcrumb')
    @slot('pagetitle') Pagos @endslot
    @slot('title') Pagos @endslot
@endcomponent 




<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
            
                            <div class="row">
                            <div class="col-sm-12">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                               
                        <thead>
                            <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 105px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 164px;" aria-label="Position: activate to sort column ascending">Position</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 72px;" aria-label="Office: activate to sort column ascending">Office</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 26px;" aria-label="Age: activate to sort column ascending">Age</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 68px;" aria-label="Start date: activate to sort column ascending">Start date</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 60px; display: none;" aria-label="Salary: activate to sort column ascending">Salary</th>
                            </tr>
                        </thead>
                        <tbody>     
                        <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td style="display: none;">$162,700</td>
                            </tr><tr class="even">
                                <td class="sorting_1 dtr-control">Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td style="display: none;">$1,200,000</td>
                            </tr><tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td style="display: none;">$86,000</td>
                            </tr><tr class="even">
                                <td class="sorting_1 dtr-control">Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td style="display: none;">$132,000</td>
                            </tr><tr class="odd">
                                <td class="sorting_1 dtr-control">Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td style="display: none;">$206,850</td>
                            </tr><tr class="even">
                                <td class="dtr-control sorting_1" tabindex="0">Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td style="display: none;">$372,000</td>
                            </tr><tr class="odd">
                                <td class="sorting_1 dtr-control">Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td style="display: none;">$163,500</td>
                            </tr><tr class="even">
                                <td class="sorting_1 dtr-control">Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td style="display: none;">$106,450</td>
                            </tr><tr class="odd">
                                <td class="sorting_1 dtr-control">Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td style="display: none;">$145,600</td>
                            </tr><tr class="even">
                                <td class="dtr-control sorting_1" tabindex="0">Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td style="display: none;">$433,060</td>
                            </tr></tbody>
                            </table>
                            </div>
                        </div>                   
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
   
                                       


@endsection
@section('script')
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/jquery/jquery.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/bootstrap/bootstrap.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/metismenu/metismenu.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/simplebar/simplebar.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/node-waves/node-waves.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/waypoints/waypoints.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/jquery-counterup/jquery-counterup.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/datatables/datatables.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/jszip/jszip.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/libs/pdfmake/pdfmake.min.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/js/pages/datatables.init.js"></script>
<script src="http://minible-v-light.laravel.themesbrand.com/assets/js/app.min.js"></script>

       <!-- apexcharts -->
       <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

       <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection