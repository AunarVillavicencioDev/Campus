<div class="modal fade bs-modal-genhojadevida-xl show" tabindex="-1" aria-labelledby="modalGenoportunidadLabel" style="display: none; padding-right: 16px;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="modalGenFacturaLabel">Gestion Hoja de vida</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">


            <div class="row align-items-start justify-content-center">
                <div class="col-xl-12 ">
                     <div class="card">
                        <div class="card-body">
                            <div class="row align-items-start justify-content-center">
                                <div class="col-xl-2" ">
                                </div>
                                <div class="col-xl-2 ">
                                    <div class="row">
                                        <p> Nombre </p>
                                    </div>
                                    <div class="row">
                                        <p> {{$nombre}}
                                    </div>
                                </div>
                                <div class="col-xl-2 ">
                                    <div class="row">
                                        <p> Edad </p>
                                    </div>
                                    <div class="row">
                                        <p> {{$edad}}
                                    </div>
                                </div>
                                <div class="col-xl-3 ">
                                    <div class="row">
                                        <p> Direccion domicilio </p>
                                    </div>
                                    <div class="row">
                                        <p> {{$direcciondomicilio}}
                                    </div>
                                </div>
                                <div class="col-xl-2 ">
                                    <div class="row">
                                        <p> Barrio </p>
                                    </div>
                                    <div class="row">
                                        <p> {{$barrio}}
                                    </div>
                                </div>            
                            </div>
                            <div class="row align-items-start justify-content-center">
                                <div class="col-xl-2" ">
                                </div>
                                <div class="col-xl-2 ">
                                    <div class="row">
                                        <p> Departamento </p>
                                    </div>
                                    <div class="row">
                                        <p> {{$departamento}}
                                    </div>
                                </div>
                                <div class="col-xl-2 ">
                                    <div class="row">
                                        <p> Municipio </p>
                                    </div>
                                    <div class="row">
                                        <p> {{$municipio}}
                                    </div>
                                </div>
                                <div class="col-xl-3 ">
                                    <div class="row">
                                        <p> Celular </p>
                                    </div>
                                    <div class="row">
                                        <p> {{$celular}}
                                    </div>
                                </div>
                                <div class="col-xl-2 ">
                                    <div class="row">
                                        <p> Telefono </p>
                                    </div>
                                    <div class="row">
                                        <p> {{$telefono}}
                                    </div>
                                </div>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->