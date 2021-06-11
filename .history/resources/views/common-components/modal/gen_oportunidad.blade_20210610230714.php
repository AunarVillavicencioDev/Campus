<div>
   
<div class="row align-items-start justify-content-center">
    <div class="col-xl-12 ">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-start justify-content-center">
                    <div class="row">
                        <div class="col-xl-2" id="espacioblanco">
                        </div>
                        <div class="col-xl-2">
                           <div class="row">
                            <p><b> ID oportunidad </b><p>
                           </div>
                           <div class="row">
                            <p> 999999 <p>
                           </div> 
                        </div>
                        <div class="col-xl-2 ">
                           <div class="row">
                           <p><b> Nombre </b><p>
                           </div>
                           <div class="row">
                            <p> Giacomo guilizzoni <p>
                           </div> 
                        </div>
                        <div class="col-xl-2">
                           <div class="row">
                           <p> <b>Telefono</b> <p>
                           </div>
                           <div class="row">
                            <p> 300 000 0000 <p>
                           </div> 
                        </div>
                        <div class="col-xl-2 ">
                           <div class="row">
                           <p><b> Programa</b> <p>
                           </div>
                           <div class="row">
                            <p> Diseño Visual <p>
                           </div>
                        </div>
                        <div class="col-xl-2" id="espacioblanco">
                        </div>
                    </div> 
                    <div class="row">
                    <br>
                    <br>
                    </div>  
                    <div class="row">
                        <div class="col-xl-2" id="espacioblanco">
                        </div>
                         <div class="col-xl-2">
                           <div class="row">
                            <p><b> Jornada</b> <p>
                           </div>
                           <div class="row">
                            <p> Diuna <p>
                           </div> 
                        </div>
                        <div class="col-xl-2 ">
                        {!! Form::open(['url' => 'oportunidad']) !!}
                           <div class="row">
                           <p><b> Estado de la Gestion </b> <p>
                           </div>   
                           <div class="row">
                            {!!  Form::select('Tipo_de_Solicitud_Selecion', ['1' => 'Llamar de nuevo', '2' => 'xxxxx'], ['class' => 'form-control form-control-lg', 'id'=>'Tipo_de_Solicitud_Selecion']); !!}
                           </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-2" id="espacioblanco">
                        </div>
                        <div class="col-xl-8" id="espacioblanco">
                        {!! Form::label('descripcion', __('documentos.descripcion'));!!}
                        {!!  Form::textarea('descripcion','',['class' => 'form-control']); !!}
                        {!! Form::close() !!}  
                        </div>
                    </div>
                    <div class="row">
                    <br>
                    <br>
                    </div> 
                    <div class="row justify-content-end">
                            <div class="col-xl-2">
                                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light"> Gestionar</button>
                            </div>
                    </div>
                
                </div>                   
            </div>
        </div>
    </div>
</div> <!-- end row-->

</div>