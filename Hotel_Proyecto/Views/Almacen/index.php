<?php

echo "<h1 class='center'>Estado Habitaciones</h1>";

?>
<!DOCTYPE html>
<body>
<div id="main">

    <div id="panel1" class="row col pad">
        <div class="col s12 m10 offset-m1">
            <div class="card-panel">
                <h4 align="center">Almacen</h4>
                <hr /><!--ESTA LINEA DE CODIGO SE UTILIZA PARA CREAR LINEAS  -->
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <!--********************************-->
                    <form class="col s12 right-alert">

                        <!--********************************-->

                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro_entrada" type="submit" name="action">Registrar Entrada</button>
                            </div>


                        </div>

                        <!--********************************-->

                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro_salida" type="submit" name="action">Registrar Salida</button>
                            </div>
                        </div>


                        <!-- Modal registro entrada -->
                        <div id="modal_registro_entrada" class="modal center-align ">
                            <div class="modal-content">
                                <h4>Registro entrada</h4>
                                <div class="row">
                                    <form class="col s12 ">
                                        <div class="row">
                                            <div class="input-field col s3">
                                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                                <input id="Folio1" type="text" class="validate">
                                                <label for="Folio1"  data-error="incorrecto" data-success="Correcto">Folio</label>


                                            </div>
                                            <div class="input-field col s6">
                                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                                <input id="Nombre del producto1" type="text" class="validate">
                                                <label for="Nombre del producto1"  data-error="incorrecto" data-success="Correcto">Nombre del producto</label>
                                            </div>
                                        </div>

                                        <div class="row ">

                                            <div class="col 12 offset-13">
                                                <label>Fecha entrada</label>
                                                <input type="text" class="datepicker">
                                                <script type="text/javascript">
                                                    $(document).ready(function(){
                                                        $('.datepicker').datepicker();
                                                    });
                                                </script>
                                            </div>


                                            <div class="disabled input-field col s4 text ">
                                                <i class="mdi-action-verified-user prefix icon-pagekit"></i>
                                                <input id="cantidad_llegada" type="number" class="validate" >
                                                <label for="cantidad_llegada"  data-error="Incorrecto" data-success="Correcto" >Cantidad de llegada</label>
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
                            <hr />
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
                            </div>
                        </div>


                        <!-- Modal registro salida -->
                        <div id="modal_registro_salida" class="modal center-align ">
                            <div class="modal-content">
                                <h4>Registro entrada</h4>
                                <div class="row">
                                    <form class="col s12 ">
                                        <div class="row">
                                            <div class="input-field col s3">
                                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                                <input id="Folio2" type="text" class="validate">
                                                <label for="Folio2"  data-error="incorrecto" data-success="Correcto">Folio</label>


                                            </div>
                                            <div class="input-field col s6">
                                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                                <input id="Nombre del producto2" type="text" class="validate">
                                                <label for="Nombre del producto2"  data-error="incorrecto" data-success="Correcto">Nombre del producto</label>
                                            </div>
                                        </div>

                                        <div class="row ">

                                            <div class="col 13 offset-13">
                                                <label>Fecha salida</label>
                                                <input type="text" class="datepicker">
                                                <script type="text/javascript">
                                                    $(document).ready(function(){
                                                        $('.datepicker').datepicker();
                                                    });
                                                </script>
                                            </div>


                                            <div class="disabled input-field col s4 text ">
                                                <i class="mdi-action-verified-user prefix icon-pagekit"></i>
                                                <input id="cantidad_salida" type="number" class="validate" >
                                                <label for="cantidad_salida"  data-error="Incorrecto" data-success="Correcto" >Cantidad de salida</label>
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
                            <hr />
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
                            </div>
                        </div>

                        <!--********************************-->
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                <input id="Folio" type="text" class="validate">
                                <label for="Folio"  data-error="incorrecto" data-success="Correcto">Folio</label>
                            </div>
                        </div>
                        <!--********************************-->
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                <input id="Nombre del producto" type="text" class="validate">
                                <label for="Nombre del producto"  data-error="incorrecto" data-success="Correcto">Nombre del producto</label>
                            </div>
                        </div>

                        <!--***************modal categoria del producto*****************-->
                        <div id="modal_categoria_producto" class="modal center-align ">
                            <div class="modal-content">
                                <h4>Categoria de producto</h4>
                                <div class="row">
                                    <form class="col s12 ">
                                        <div class="row">
                                            <div class="input-field col s9">
                                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                                <input id="categoria_producto" type="text" class="validate">
                                                <label for="categoria_producto"  data-error="incorrecto" data-success="Correcto">Descripcion de categoria</label>
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
                            <hr />
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
                            </div>
                        </div>

                        <!--*******************fin modal tipo habitacion*************-->


                        <!--***************modal tipo de producto*****************-->
                        <div id="modal_tipo_producto" class="modal center-align ">
                            <div class="modal-content">
                                <h4>Tipo de producto</h4>

                                <div class="row">
                                    <form class="col s12 pad">
                                        <div class="row">
                                            <div class="input-field col s9">
                                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                                <input id="descripcion_producto" type="text" class="validate">
                                                <label for="descripcion_producto"  data-error="incorrecto" data-success="Correcto">Descripcion De producto</label>
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
                            <hr />
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
                            </div>
                        </div>

                        <!--*******************fin modal tipo habitacion*************-->



                        <!--*******************seleccionar opcion*************-->
                        <div class="row">
                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class="icon-command #000000 black"></i></a>
                            </div>

                            <div class="input-field col s4 ">
                                <select id="Categoria" type="text" class="validate">
                                    <option value="" disabled selected>Selecciona categoria</option>
                                    <option value="1">Electrodomesticos</option>
                                    <option value="2">Limpieza</option>
                                    <option value="3">Textiles</option>
                                </select>
                                <label for="Categoria" data-error="incorrecto" data-success="Correcto" >Categoria</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_categoria_producto" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class="icon-command #000000 black"></i></a>
                            </div>

                            <div class="input-field col s4 ">
                                <select id="tipoproducto" type="text" class="validate">
                                    <option value="" disabled selected>Selecciona Tipo de producto </option>
                                    <option value="1">Consumible</option>
                                    <option value="2">Perecedero</option>
                                </select>
                                <label for="tipoproducto" data-error="incorrecto" data-success="Correcto"> Tipo de producto</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger " href="#modal_tipo_producto" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                            </div>
                        </div>



                        <!--******************Estado habitacion**************-->

                        <div class="row">

                        </div>

                        <!--**************************existencias************************************************-->

                        <div class="row">
                            <div class="input-field input-field col s3 text">
                                <i class="mdi-action-verified-user prefix icon-pagekit"></i>
                                <input id="Existencias" type="number" class="validate" >
                                <label for="Existencias"  data-error="Incorrecto" data-success="Correcto" >Existencias</label>
                            </div>

                            <div class="input-field input-field col s3 text">
                                <i class="mdi-action-verified-user prefix icon-pagekit"></i>
                                <input id="Stockmaximo" type="number" class="validate" >
                                <label for="Stockmaximo"  data-error="Incorrecto" data-success="Correcto" >Stock maximo</label>
                            </div>

                            <div class="input-field input-field col s3 text">
                                <i class="mdi-action-verified-user prefix icon-pagekit"></i>
                                <input id="Stockminimo" type="number" class="validate" >
                                <label for="Stockminimo"  data-error="Incorrecto" data-success="Correcto" >Stock minimo</label>
                            </div>
                        </div>











                        <!--********************************-->
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro" type="submit" name="action">Registrar</button>
                            </div>
                        </div>


                        <!-- Modal registro -->
                        <div id="modal_registro" class="modal">
                            <div class="modal-content">
                                <h5>Se registro exitosamente</h5>
                                <hr />
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
                <h4 align="center">Productos en Almacen</h4>
                <hr />

                <div class="row">
                    <div class="input-field col s4 offset-s8">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
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
                <!-- Modal editar -->
                <div id="modal_editar" class="modal">
                    <div class="modal-content">
                        <h5>¿Desea editar el Registro?</h5>
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
                        <th>Folio</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Tipo</th>
                        <th>Existencias</th>
                        <th>Stock_maximo</th>
                        <th>Stock_minimo</th>
                        <th></th>
                        <th></th>

                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>LCL12</td>
                        <td>Jabon para manos</td>
                        <td>Limpieza</td>
                        <td>Sanitario</td>
                        <td>30</td>
                        <td>50</td>
                        <td>5</td>
                        <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                        <td><a class="btn-flat modal-trigger  icon-pencil blue-text" href="#modal_editar"></a></td>

                    </tr>
                    <tr>
                        <td>TCT05</td>
                        <td>Sabana</td>
                        <td>Textiles</td>
                        <td>Lavables</td>
                        <td>80</td>
                        <td>100</td>
                        <td>10</td>
                        <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                        <td><a class="btn-flat modal-trigger  icon-pencil blue-text" href="#modal_editar"></a></td>

                    </tr>
                    <tr>
                        <td>ECE60</td>
                        <td>Televisor</td>
                        <td>Electrodomesticos</td>
                        <td>Permanente</td>
                        <td>50</td>
                        <td>80</td>
                        <td>10</td>
                        <td><a class="btn-flat modal-trigger icon-cross red-text" href="#modal_eliminar"></a></td>
                        <td><a class="btn-flat modal-trigger  icon-pencil blue-text" href="#modal_editar"></a></td>

                    </tr>
                    </tbody>
                </table>
                <!--********************************-->

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="Public/js/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="Public/js/plugins/materialize.min.js"></script>
<script type="text/javascript" src="Public/js/plugins/plugins.min.js"></script>
</body>



</html>
