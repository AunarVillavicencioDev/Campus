@extends('layouts.master-pdf')
@section('content')
@php
$colorazul= #001680;
$coloramarillo = #FFEF00
$codigodebarras = "31-03-2021/Nombre/117038188/102322";
$debajocodigobarras="31032021117038188102322";
@endphp  
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+128&display=swap" rel="stylesheet">            
<style>

.bordes{
    border: 1px solid black;
    border-top: 1px solid black;    
}
#codigodebarras{
    font-family: 'Libre Barcode 128', cursive;
    font-size: 60px;
    widgt
}
.cambiocolor{
    color: lighten($colorazul, 50%);
}
#mediosdepago{
    font-size: 11px;
}

</style>                 
<div class="row align-items-start justify-content-center">
    <div class="col-xl-12 ">
        <div class="row align-items-start justify-content-center">
            <div class="table-responsive-xl">
                        <table class="table mb-0" id="Tabla principal">

                            <thead>
                                <tr>
                                    <th style="width: 600px;"><img src="https://lh3.googleusercontent.com/proxy/cKN-JafT9NyQiv_Xo_eRFDpvVWRpl5g11z3uNif_B9hwb09evWdfC1uNnyuvIUM68DJjlu2lsOe4rvMCku7GAFrlIz9LOF-vkbUBNzEZDp69fe00mAR7WA"> </th>
                                    <th style="width: 506px; text-align: center;"><p><b>
                                    CORPORACION UNIVERSITARIA AUTONOMA DE <br>
                                    NARIÑO "AUNAR" <br>
                                    891.224.762.5 <br>
                                    kr 48 sur cll 1 anillo vial/ via acacias - Tel: <br>
                                    6823030                                    
                                    </b></p></th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr><td><br></td></tr>
                                <tr>    
                                    <td  colspan="2" scope="row">
                                        
                                                                <table class="table bordes mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th  class="table-active bordes" scope="row">Fecha</th>
                                                                        <td >16-06-2021</td>
                                                                        <th   class="table-active bordes" scope="row">Estudiantes  </th>
                                                                        <td >Pepito Perez Peps Pops</td>
                                                                    </tr>
                                                                    <tr>
                                                                    <th  class="table-active bordes" scope="row">Identificacion  </th>
                                                                        <td >123456789s   </td>
                                                                        <th   class="table-active bordes " scope="row">Direccion  </th>
                                                                        <td ">calle 40 #20 - 32, jordan</td>
                                                                    </tr>
                                                                    <tr>
                                                                   <th class="table-active bordes" scope="row">Programa  </th>
                                                                        <td >Ingenieria Informatica  </td>
                                                                        <th   class="table-active bordes" scope="row">Jornada </th>
                                                                        <td >Diurna</td>
                                                                    </tr>
                                                                </tbody>
                                                                </table>
                                    
                                    </td>
                                    <td></td>
                                </tr>
                                <tr> <td> <br> </td> </tr>
                                <tr>
                                    <th   colspan="2" scope="row">
                                                                <table class="table bordes  mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th colspan="3"  class="table-active bordes" scope="row">CONCEPTOS </th>
                                                                        <th   class="table-active" scope="row">VALOR </th>
                                                                       
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3"   scope="row"> Profesional en Ingenieria Informatica cod 123456 </td>
                                                                        <td    scope="row" colspan="3"  class=" bordes"> $400.000 </td>
                                                                    </tr>
                                                                </tbody>
                                                                </table>
                                    </th>
                                    <td></td>
                                    
                                </tr>
                                <tr><td><br></td></tr>
                                <tr>
                                    <th colspan="2" scope="row">  <table class="table bordes  mb-0">
                                                                <tbody>
                                                                    <tr>    
                                                                        
                                                                        <th colspan="3"  class="table-active bordes" style="text-align: right;" scope="row">PAGUE HASTA  </th>
                                                                        <th   class="table-active" scope="row">VALOR  </th>                                                                      
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" scope="row"> PAGO ORDINARIO </td>
                                                                        <td    scope="row"> 31/05/2021 </td>
                                                                        <td    scope="row"  class=" bordes"> $400.000 </td>
                                                                    </tr>
                                                                </tbody>
                                                                </table> </th>
                                    <td></td>
                                </tr>
                                <tr > <td> <br> </td> </tr>
                                
                                <tr>
                                    <th colspan="2" scope="row">  <table class="table mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="2"   scope="row" style="text-align: right;"> HASTA 31/05/2021 </td>
                                                                        <td  style="text-align: center;  scope="row"> TOTAL A PAGAR </td>
                                                                        <td    scope="row">$400.000 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="4"   scope="row" style="text-align: center;"> <p id="codigodebarras"> (415)7709998742406(8020)07001121965804017810(3900)00015100(96)20210115</p> </td>
                                                                    </tr>
                                                                </tbody>
                                                                </table> </th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="row">  <table class="table mb-0" id="mediosdepago">
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="2"   scope="row" style="text-align: left;">
                                                                        Medios de Pago <br> 
                                                                        1.Banco BBVA CTA ahorros No 957534852 <br>  
                                                                        2.Tarjetas de crédito MasterCard, Visa y American Express en linea <br>
                                                                        3.Consuerte<br>
                                                                        4.PSE  -https://www.zonapagos.com/t_aunar/pagos.asp <br>
                                                                        </td>
                                                                        <td colspan="2"><img  width="100" height="30"src="http://asojuegos.co/wp-content/uploads/2018/12/logo_pie_consuerte.png">
                                                                        <img  width="100" height="30"src="http://assets.stickpng.com/images/5a270db16c723e0970203ea9.png"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2"   scope="row" style="text-align:left;"> 
                                                                        EN CASO DE NO CUMPLIR CON LOS REQUISITOS PARA GRADO <br>
                                                                        ABSTENERSE DE PAGAR; SI LOS CANCELO, ESTOS VALORES NO SERAN <br>
                                                                        CAUSAL DE DEVOLUCIÓN, SE SOSTIENE HASTA POR UN AÑO.<br>
                                                                        </td>
                                                                        <td colspan="2"></td>
                                                                    </tr>
                                                                </tbody>
                                                                </table> </th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="2" scope="row">  <table class="table mb-0" id="ultimo">
                                                                <tbody>
                                                                    <tr>
                                                                        <td    scope="row" style="text-align: center;"> -DOCUMENTO PARA EL ESTUDIANTE-   </td>
                                                                    </tr>
                                                                </tbody>
                                                                </table> </th>
                                    <td></td>
                                </tr>
                                <tr><td><br></td></tr>

                            </tbody>
                        </table>
            </div>            
        </div>
    </div>
</div> <!-- end row-->
    
@endsection


