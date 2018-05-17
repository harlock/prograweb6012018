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


<div id="main">

    <div id="panel1" class="row col pad">
        <div class="col s12 m10 offset-m1">
            <div class="card-panel">
                <h4 align="center">Asignacion de Servicios</h4>
                <hr /><!--ESTA LINEA DE CODIGO SE UTILIZA PARA CREAR LINEAS  -->
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <!--********************************-->
                    <form class="col s12 right-alert">


                        <div class="row">
                            <div class="input-field col s4 offset-s8">
                                <i class="mdi-action-verified-user prefix icon-search"></i>
                                <input id="Folio" type="text">
                                <label for="Folio"  data-error="incorrecto" data-success="Correcto">Folio</label>
                            </div>
                        </div>
                        <!--********************************-->


                        <!--***************modal tipo habitacion*****************-->
                        <div id="modal_tipo_habitacion" class="modal center-align ">
                            <div class="modal-content">
                                <h4>Habitación</h4>
                                <div class="row">
                                    <form class="col s12 ">
                                        <div class="row">
                                            <div class="input-field col s10">
                                                <i class="mdi-action-verified-user prefix icon-search"></i>
                                                <input id="Habitacion" type="text" class="validate center">
                                                <label for="Habitacion"  data-error="incorrecto" data-success="Correcto">Buscar</label>
                                            </div>
                                        </div>
                                        <!--********************************-->
                                        <table class="centered">
                                            <thead>
                                            <tr>
                                                <th>Habitaciónes</th>
                                                <th>Servicios</th>
                                                <th>Estado</th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>12</td>
                                                <td>Platino</td>
                                                <td>Ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Dorada</td>
                                                <td>Ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Estrella</td>
                                                <td>ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--********************************-->

                                        <div class="row">
                                            <div class="input-field col s9">

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--*******************fin modal tipo habitacion*************-->


                        <!--***************modal estado habitacion*****************-->

                        <div id="modal_estado_habitacion" class="modal center-align ">
                            <div class="modal-content">
                                <h4>Servicios</h4>

                                <div class="row">
                                    <form class="col s12 pad">
                                        <div class="row">
                                            <div class="input-field col s10">
                                                <i class="mdi-action-verified-user prefix icon-search"></i>
                                                <input id="servicios" type="text" class="validate center">
                                                <label for="servicios"  data-error="incorrecto" data-success="Correcto">Buscar</label>
                                            </div>
                                        </div>

                                        <!--********************************-->

                                        <table class="centered">
                                            <thead>
                                            <tr>

                                                <th>Servicios</th>
                                                <th>Estado</th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>

                                                <td>Platino</td>
                                                <td>Ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                                            </tr>
                                            <tr>

                                                <td>Dorada</td>
                                                <td>Ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                                            </tr>
                                            <tr>

                                                <td>Estrella</td>
                                                <td>ocupada</td>

                                                <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--********************************-->

                                        <div class="row">
                                            <div class="input-field col s9">

                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr />
                        </div>

                        <!--*******************fin modal tipo habitacion*************-->

                        <!--********************************-->


                        <!--*******************seleccionar opcion buscar*************-->
                        <div class="row">
                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class="icon-home #000000 black"></i></a>
                            </div>

                            <div class="input-field col s8 ">
                                <select id="tipohabitacion" type="text" class="validate">
                                    <option value="" disabled selected>Selecciona la Habitacion</option>
                                    <option value="1">Ejemplo Habitacion Premium</option>
                                    <option value="2">Ejemplo Habitacion Plata</option>
                                    <option value="3">Ejemplo Habitacion Oro</option>
                                </select>
                                <label for="tipohabitacion" data-error="incorrecto" data-success="Correcto" >Habitacion</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_tipo_habitacion" ><i class="icon-search #00838f cyan darken-3"></i></a>
                            </div>
                        </div>

                        <!--********************************-->


                        <!--******************Estado habitacion**************-->

                        <div class="row">
                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class=" icon-cog #000000 black"></i></a>
                            </div>

                            <div class="input-field col s8 ">
                                <select id="nomestadohabitacion" type="text" class="validate">
                                    <option value="" disabled selected>Selecciona el Servicio</option>
                                    <option value="1">SPa</option>
                                    <option value="2">Internet</option>
                                </select>
                                <label for="nomestadohabitacion" data-error="incorrecto" data-success="Correcto">Servcios</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger " href="#modal_estado_habitacion" ><i class="icon-search #00838f cyan darken-3"></i></a>
                            </div>
                        </div>
                        <!--********************************-->

                        <div class="row">
                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class=" icon-cog #000000 black"></i></a>
                            </div>

                            <div class="input-field col s8 ">
                                <select id="estadohabitacion" type="text" class="validate">
                                    <option value="" disabled selected>Selecciona estado</option>
                                    <option value="1">Disponible</option>
                                    <option value="2">No disponible</option>
                                </select>
                                <label for="nomestadohabitacion" data-error="incorrecto" data-success="Correcto">Estados</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>



                        </div>
                        <div>
                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class=" icon-calendar #000000 black"></i></a>
                            </div>
                            <div class="input-field col s4 ">
                                <label>Fecha de registro</label>
                                <input type="text" class="datepicker">
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('.datepicker').datepicker();
                                    });
                                </script>
                            </div>
                        </div>

                        <div id="modal_estado" class="modal center-align ">
                            <div class="modal-content">
                                <h4>Estado del Servicio</h4>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s10">
                                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                                <input id="estadoservicio" type="text" class="validate center">
                                                <label for="estadoservicio"  data-error="incorrecto" data-success="Correcto">Escribe tipo de estado</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s9">
                                                <button class="btn waves-effect waves-light right #00838f cyan darken-3" type="submit" name="action">Registar

                                                </button>
                                            </div>
                                            <div class="input-field col s3">
                                                <button class="btn waves-effect waves-light righ #00838f cyan darken-3" type="submit" name="action">Limpiar

                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--********************************-->
                        <!-- Modal registro -->
                        <div id="modal_registro" class="modal">
                            <div class="modal-content">
                                <h5>Mensaje</h5>
                                <hr />
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                            </div>
                        </div>

                    </form>

                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro" type="submit" name="action">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!--********************************-->
    <div id="paneltablas" class="row col ">
        <div class="col s12 m10 offset-m1">
            <div class="card-panel">
                <h4 align="center">Servicios Registrados</h4>
                <hr />

                <div class="row">
                    <div class="input-field col s4 offset-s8">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
                        <label for="Buscar"  data-error="incorrecto" data-success="Correcto">Buscar</label>

                        <input id="buscar" type="text">
                    </div>
                </div>


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
                        <th>Habitaciónes</th>
                        <th>Servicios</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>

                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>12</td>
                        <td>Spa</td>
                        <td>Disponible</td>

                        <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Spa</td>
                        <td>Disponible</td>

                        <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>

                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Internet</td>
                        <td>No disponible</td>

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