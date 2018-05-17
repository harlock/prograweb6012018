<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17/05/2018
 * Time: 06:00 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="imagenes/601.PNG" sizes="36x36">
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet">
    <link href="css/style.min.css" type="text/css" rel="stylesheet">
    <link href="css/custom.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>

<body>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>

<div id="main">

    <div id="panel1" class="row col pad">
        <div class="col s12 m10 offset-m1">
            <div class="card-panel ">
                <h4 class="left"><a class="icon-bell black-text"></a></h4>
                <h4 align="center">Check In</h4>

                <div class="divider"></div><!--ESTA LINEA DE CODIGO SE UTILIZA PARA CREAR LINEAS  -->
                <code class=" language-markup "><!--********************************--></code>
                <div class="row">
                    <div class="row">
                        <div class="input-field col s5 offset-s6">
                            <i class="mdi-action-verified-user prefix icon-search "></i>
                            <input id="buscar1" placeholder= "Buscar folio de Reservación" type="text">
                        </div>
                    </div>
                    <!--********************************-->

                    <div class="row">
                        <div class="input-field input-field col s6 text">
                            <i class="mdi-action-verified-user prefix icon-pagekit"></i>
                            <input id="numero_habitacion" type="number" class="validate" readonly="readonly" >
                            <label for="numero_habitacion"   disabled="numero_habitacion" >Número de Hábitación</label>
                        </div>
                    </div>

                    <div class="row">
                        <form class="col s12 pad">
                            <div class="row">
                                <div class="input-field input-field col s9 text">
                                    <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                    <input id="descripcion_estado" type="number" class="validate center" >
                                    <label for="descripcion_estado"  data-error="Incorrecto" data-success="Correcto">Descripción</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--*******************seleccionar opcion*************-->
                    <div class="row">
                        <div class="input-field col s1">
                            <a class="btn-floating disabled"><i class="icon-command #000000 black"></i></a>
                        </div>

                        <div class="input-field col s8 ">
                            <select  id="tipohabitacion" type="text" class="validate" >
                                <option value="" disabled selected>Selecciona categoria</option>
                                <option value="1">Ejemplo Habitacion Premium</option>
                                <option value="2">Ejemplo Habitacion Plata</option>
                                <option value="3">Ejemplo Habitacion Oro</option>
                            </select>
                            <label for="tipohabitacion" data-error="incorrecto" data-success="Correcto" >Tipo de Habitación</label>
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('select').formSelect();
                                });
                            </script>
                        </div>

                    </div>

                    <!--********************************-->


                    <!--******************Folio**************-->

                    <div class="row">
                        <div class="input-field col s5 offset-s1">
                            <i class="mdi-action-verified-user prefix icon-profile"></i>
                            <input id="folio" type="text" class="validate"readonly="readonly">
                            <label for="folio"  data-error="incorrecto" data-success="Correcto">Folio del Cliente</label>
                        </div>

                        <div class="input-field col s5 text">
                            <i class="mdi-action-verified-user prefix icon-calendar"></i>
                            <label >Fecha de entrada</label>
                            <input id="fechaentrada" type="text" class="datepicker" >
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('.datepicker').datepicker();
                                });
                            </script>
                        </div>
                    </div>

                    <!--********************************-->
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro" type="submit" name="action">Check in</button>
                        </div>
                    </div>


                    <!-- Modal registro -->
                    <div id="modal_registro" class="modal">
                        <div class="modal-content">
                            <h5>Mensaje</h5>
                            <hr />
                            <label><h5>Registro exitoso</h5></label>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                        </div>
                    </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <!--********************************-->
    <div id="paneltablas" class="row col ">
        <div class="col s12 m10 offset-m1">
            <div class="card-panel">
                <h4 align="center">Entradas Registradas</h4>
                <div class="divider"></div>
                <!-- Modal eliminar -->
                <div id="modal_eliminar" class="modal">
                    <div class="modal-content">
                        <h5>¿Desea Eliminar el Registro?</h5>
                        <hr />
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                    </div>
                </div>
                <!--*********************final modal eliminar***********-->
                <table class="centered">
                    <thead>
                    <tr>
                        <th>Numero de Habitación</th>
                        <th>Descripción</th>
                        <th>Tipo Habitación</th>
                        <th>Folio del cliente</th>
                        <th>Fecha de reserva</th>

                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>12</td>
                        <td>Platino</td>
                        <td>Doble</td>
                        <td>9900</td>
                        <td>17/10/2017</td>
                        <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Dorada</td>
                        <td>Individual</td>
                        <td>0123</td>
                        <td>19/10/2017</td>
                        <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Estrella</td>
                        <td>Matrimonial</td>
                        <td>9077</td>
                        <td>28/10/2017</td>
                        <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                    </tr>
                    </tbody>
                </table>
                <!--********************************-->

            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/plugins/materialize.min.js"></script>
<script type="text/javascript" src="js/plugins/plugins.min.js"></script>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------>

</body>
</html>