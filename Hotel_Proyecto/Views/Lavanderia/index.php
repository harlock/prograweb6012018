<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17/05/2018
 * Time: 06:00 PM
 */
?>
<body>

<div id="main">

        <div id="panel1" class="row col pad">
            <div class="col s12 m10 offset-m1">
                <div>
                    <div class="card-panel ">
                        <h4 class="left"><a class="icon-teespring "></a></h4>
                        <h4 align="center">Registro de Prendas</h4>

                        <div class="divider"></div>

                        <div class="row">
                            <!--********************************-->
                            <form class="col s12 right-alert">
                                <div>
                                    <!--********************************-->
                                    <div class="row">
                                        <div class="padding-em"></div>
                                        <div class="input-field col s4 text ">
                                            <i class="mdi-action-verified-user prefix icon-calendar blue-text"></i>
                                            <label>Fecha de Registro</label>
                                            <input id="fecha_entrada" type="text" class="datepicker">
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('.datepicker').datepicker();
                                                });
                                            </script>
                                        </div>
                                        <!--********************************-->
                                        <div class="input-field col s4 text ">
                                            <i class="mdi-action-verified-user prefix icon-calendar blue-text"></i>
                                            <label>Fecha de Entrega</label>
                                            <input id="fecha_recepcion" type="text" class="datepicker">
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('.datepicker').datepicker();
                                                });
                                            </script>
                                        </div>
                                        <!--********************************-->
                                    </div>
                                </div>


                                <div class="divider"></div>
                                <div class="padding-divider "></div>
                                <!--***************modal numero de habitacion*****************-->
                                <div>
                                    <div id="modal_numero_habitacion" class="modal">
                                        <div class="modal-content">
                                            <div class="card-panel teal #00b8d4"><h4 align="center">Habitaciones</h4></div>
                                            <div class="row">
                                                <form class="col s12">
                                                    <div class="row">
                                                        <div class="input-field col s10">
                                                            <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                                            <input id="numerohabitacion" type="number" class="validate center">
                                                            <label for="numerohabitacion"  data-error="incorrecto" data-success="Correcto">Numero de Habitación</label>
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
                                    <!--*******************************************-->
                                    <div id="modal_estado_prenda" class="modal">
                                        <div class="modal-content">
                                            <div class="card-panel teal #00b8d4"><h4 align="center">Estado de la Prenda</h4></div>
                                            <div class="row">
                                                <form class="col s12 pad">
                                                    <div class="row">
                                                        <div class="input-field input-field col s10 text">
                                                            <i class="mdi-action-verified-user prefix icon-circleci"></i>
                                                            <input id="descripcion_estado" type="text" class="validate center" >
                                                            <label for="descripcion_estado"  data-error="Incorrecto" data-success="Correcto">Descripción</label>
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
                                    <!--*******************************************-->
                                </div>

                                <!--******************************numero habitacion*******************************************************-->
                                <div>
                                    <div class="row">
                                        <div class="input-field col s1 offset-m1">
                                            <a class="btn-floating disabled"><i class="icon-home #000000 white blue-text"></i></a>
                                        </div>
                                        <!--*******************************************-->
                                        <div class="input-field col s3">
                                            <select id="numerotipohabitacion" type="text" class="validate">
                                                <option value="" disabled selected>Selecciona la Habitacion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                            <label for="numerotipohabitacion" data-error="incorrecto" data-success="Correcto" >Numero de Habitación</label>
                                            <script type="text/javascript">
                                                $(document).ready(function(){
                                                    $('select').formSelect();
                                                });
                                            </script>
                                        </div>
                                        <!--*******************************************-->
                                        <div class="input-field col s1">
                                            <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_numero_habitacion" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                                        </div>
                                        <!--*******************************************-->
                                        <div class="row">
                                            <div class="input-field col s1">
                                                <a class="btn-floating disabled"><i class="icon-accessibility #000000 white blue-text"></i></a>
                                            </div>
                                            <!--*******************************************-->
                                            <div class="input-field col s3">
                                                <select id="nomestadohabitacion" type="text" class="validate">
                                                    <option value="" disabled selected>Selecciona Estado</option>
                                                    <option value="1">Mal estado</option>
                                                    <option value="2">Buen estado</option>
                                                </select>
                                                <label for="nomestadohabitacion" data-error="incorrecto" data-success="Correcto"> Estado de la Prenda</label>
                                                <script type="text/javascript">
                                                    $(document).ready(function(){
                                                        $('select').formSelect();
                                                    });
                                                </script>
                                            </div>
                                            <!--*******************************************-->
                                            <div class="input-field col s1">
                                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger " href="#modal_estado_prenda" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                                            </div>
                                        </div>
                                        <!--*******************************************-->
                                    </div>

                                    <div class="row">
                                        <div class=" input-field col s10 offset-s1">
                                            <i class=" mdi-action-verified-user prefix icon-barcode"></i>
                                            <input  id="buscar" type="text" placeholder="Ingrese el Código de la Prenda">
                                            <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro" type="submit" name="action">Añadir</button>
                                        </div>

                                    </div>
                                    <div class="divider"></div>
                                    <div class="padding-divider"></div>
                                    <div class="row">
                                        <h5 align="center">Prendas Agregadas al Servicio</h5>
                                        <div class="divider"></div>
                                        <table border="1" class="centered">

                                            <thead>
                                            <tr>
                                                <th>Tipo de Ropa</th>
                                                <th>Tipo de Tela</th>
                                                <th>Color de Prenda</th>
                                                <th>Tratamiento</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <?php
                                            while ($row=mysqli_fetch_array($datos))
                                            echo "
                                            <tr>
                                            <td>{$row[0]}</td>
                                            <td>{$row[1]}</td>
                                            <td>{$row[2]}</td>
                                            <td>{$row[3]}</td>
                                            <td>{$row[4]}</td>
                                            <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></a></td>
                                            </tr>
                                            ";
                                            ?>
                                            </tbody>
                                        </table>
                                        <div class="divider"></div>
                                    </div>

                                    <div class="input-field col s4 offset-s8">
                                        <i class="mdi-action-verified-user prefix icon-coin-dollar blue-text"></i>
                                        <input id="subtotal" type="text" class="validate" >
                                        <label for="subtotal"  data-error="Incorrecto" data-success="Correcto" >Subtotal</label>
                                    </div>

                                    <div class="input-field col s4 offset-s8">
                                        <i class="mdi-action-verified-user prefix icon-coin-dollar blue-text"></i>
                                        <input id="iva" type="text" class="validate" >
                                        <label for="iva"  data-error="Incorrecto" data-success="Correcto" >Iva</label>
                                    </div>

                                    <div class="input-field col s4 offset-s8">
                                        <i class="mdi-action-verified-user prefix icon-coin-dollar blue-text"></i>
                                        <input id="total" type="text" class="validate" >
                                        <label for="total"  data-error="Incorrecto" data-success="Correcto" >Total</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <div class="divider"></div>
                                    </div>


                                    <div class="row">
                                        <div class="input-field col s4 offset-s8">
                                            <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro" type="submit" name="action">Procesar</button>
                                        </div>

                                    </div>


                                </div>
                            </form>
                        </div>

                        <div class="row">

                            <div id="modal_registro" class="modal">
                                <div class="modal-content">
                                    <h5>Mensaje</h5>
                                    <div class="divider"></div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>

                <section id="content">
                    <div class="fixed-action-btn" style="bottom:34%; right: 15px;">
                        <a class="btn-floating blue-grey btn-large modal-trigger" href="#modal_precio" ><i class="icon-coin-dollar"></i></a>
                    </div>
                </section>
                <section id="content1">
                    <div class="fixed-action-btn" style="bottom:44%; right: 15px;">
                        <a class="btn-floating blue-grey btn-large modal-trigger" href="#modal_colores" ><i class="icon-icq"></i></a>
                    </div>
                </section>
                <section id="content2">
                    <div class="fixed-action-btn" style="bottom:54%; right: 15px;">
                        <a class="btn-floating blue-grey btn-large modal-trigger" href="#modal_tratamiento" ><i class="icon-ticket white-text"></i></a>
                    </div>
                </section>
                <section id="content3">
                    <div class="fixed-action-btn" style="bottom:64%; right: 15px;">
                        <a class="btn-floating blue-grey btn-large modal-trigger" href="#modal_tela" ><i class="icon-teespring"></i></a>
                    </div>
                </section>
                <section id="content4">
                    <div class="fixed-action-btn" style="bottom:74%; right: 15px;">
                        <a class="btn-floating blue-grey btn-large modal-trigger" href="#modal_ropa" ><i class="icon-radio-checked orange-text"></i></a>
                    </div>
                </section>

                <div>
                    <div id="modal_ropa" class="modal">
                        <div class="modal-content">
                            <div class="card-panel teal #00b8d4"><h4 align="center">Tipo de Ropa</h4></div>
                            <div class="row">
                                <form class="col s12 pad">
                                    <div class="row">
                                        <div class="input-field col s10">
                                            <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                            <input id="tiporopa" type="text" class="validate center">
                                            <label for="tiporopa"  data-error="incorrecto" data-success="Correcto">Descripción</label>
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
                </div>
                <!--************************************tipo tela**-->
                <div>
                    <div id="modal_tela" class="modal">
                        <div class="modal-content">
                            <div class="card-panel teal #00b8d4"><h4 align="center">Tipo de Tela</h4></div>
                            <div class="row">
                                <form class="col s12 pad">
                                    <div class="row">
                                        <div class="input-field input-field col s10 text offset-m padding-divider">
                                            <i class="mdi-action-verified-user prefix icon-circleci"></i>
                                            <input id="tipotela" type="text" class="validate center" >

                                            <label for="tipotela"  data-error="Incorrecto" data-success="Correcto">Descripción</label>
                                        </div>
                                    </div>

                                </form>
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
                    </div>
                </div>
                <!--************************************tratamiento**-->
                <div>
                    <div id="modal_tratamiento" class="modal">
                        <div class="modal-content">
                            <div class="card-panel teal #00b8d4"><h4 align="center">Tipo de Tratamiento</h4></div>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field input-field col s10 text offset-m padding-divider">
                                            <i class="mdi-action-verified-user prefix icon-circleci"></i>
                                            <input id="trataprenda" type="text" class="validate center" >

                                            <label for="trataprenda"  data-error="Incorrecto" data-success="Correcto">Descripción</label>
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
                </div>
                <!--************************************precios**-->
                <div>
                    <div id="modal_precio" class="modal">
                        <div class="modal-content">
                            <div class="card-panel teal #00b8d4"><h4 align="center">Precio Tratamiento</h4></div>

                            <div class="row">
                                <form class="col s12 pad">
                                    <div class="row">
                                        <div class="input-field input-field col s10 text offset-m padding-divider">
                                            <i class="mdi-action-verified-user prefix icon-coin-dollar"></i>
                                            <input id="preciotrata" type="text" class="validate center" >

                                            <label for="preciotrata"  data-error="Incorrecto" data-success="Correcto">Precio</label>
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
                </div>
                <!--************************************tratamiento**-->
                <div>
                    <div id="modal_colores" class="modal">
                        <div class="modal-content">
                            <div class="card-panel teal #00b8d4"><h4 align="center">Colores</h4></div>
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field input-field col s10 text offset-m padding-divider">
                                            <i class="mdi-action-verified-user prefix icon-circleci"></i>
                                            <input id="colores" type="text" class="validate center" >

                                            <label for="colores"  data-error="Incorrecto" data-success="Correcto">Descripción</label>
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
                </div>
            </div>
        </div>
        <!--********************************-->

    </div>
</body>