<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="modal fade bs-example-modal-lg show" id="modalCargarPago" tabindex="-1" aria-labelledby="modalGenGestionpago" style="display: none; padding-right: 16px;" aria-modal="false" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="modalGengestionpagoLabel">Cargar Pago</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="row align-items-start justify-content-center">
                    <div class="col-xl-12 ">
                        <div class="row align-items-start justify-content-center">
                            <div class="row">
                                <div class="col-xl-2">
                                </div>
                                <div class="col-xl-8">
                                    {!! Form::open(['route' => 'financierogpago.store', 'files' => true, 'method' => 'post']) !!}
                                    {!! Form::label('soportepago', trans('financieroPagos.inputCargarPagosFile.label'));!!}
                                    {!! Form::file(trans('financieroPagos.inputCargarPagosFile.name'), ['class' => 'form-control']); !!}
                                </div>
                            </div>    
                            <div class="row">
                                <br>
                                <br>
                            </div>
                            <div class="row">
                                <div class="col-xl-2">
                                </div>
                                <div class="col-xl-8">
                                    {!! Form::label('descripcion', __('documentos.descripcion'));!!}
                                    {!!  Form::textarea('descripcion','',['class' => 'form-control']); !!}
                                    
                                </div>
                            </div>
                            <div class="row">
                                <br>
                                <br>
                            </div> 
                            <div class="row justify-content-end">
                                <div class="col-xl-2">
                                    <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light"> Gestionar</button>
                                    {!! Form::close() !!}  
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end row-->

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>