<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17/05/2018
 * Time: 03:39 PM
 */
?>

<body>
    <div id="main">

    <div id="panel1" class="row col pad">
        <div class="col s12 m10 offset-m1">
            <div class="card-panel">

                <h4 class="left"><a class="icon-diamonds black-text"></a></h4>
                <h4 align="center">Habitación</h4>

                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <!--********************************-->
                    <form class="col s12 right-alert">
                        <!--********************************-->
                        <div class="row">
                            <div class="input-field input-field col s4 text">
                                <i class="mdi-action-verified-user prefix icon-list-numbered"></i>
                                <input id="numero_habitacion" type="number" class="validate" name="numero_habitacion">
                                <label for="numero_habitacion"  data-error="Incorrecto" data-success="Correcto" >Número de Hábitación</label>
                            </div>
                        </div>
                        <!--********************************-->
                        <div class="row">
                            <div class="input-field col s9">
                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                <input id="descripcion" type="text" class="validate" name="descripcion">
                                <label for="descripcion"  data-error="incorrecto" data-success="Correcto">Descripción</label>
                            </div>
                        </div>

                        <!--***************modal tipo habitacion*****************-->
                        <div id="modal_tipo_habitacion" class="modal center-align ">
                            <div class="modal-content">
                                <div class="card-panel teal #00b8d4"><h4 class="left"><a class=" text-black"></a></h4><h4 align="center">Tipo Habitación</h4></div>

                                <div class="row">
                                    <form class="col s12 ">
                                        <div class="row">
                                            <div class="input-field col s10">
                                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                                <input id="nonmbretipohabitacion" type="text" class="validate center">
                                                <label for="nonmbretipohabitacion"  data-error="incorrecto" data-success="Correcto">Tipo de Habitación</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field input-field col s10 text">
                                                <i class="mdi-action-verified-user prefix icon-coin-dollar"></i>
                                                <input id="precio" type="number" class="validate center" >
                                                <label for="precio"  data-error="Incorrecto" data-success="Correcto" >Precio</label>
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

                        <!--*******************fin modal tipo habitacion*************-->


                        <!--***************modal estado habitacion*****************-->
                        <div id="modal_estado_habitacion" class="modal center-align ">
                            <div class="modal-content">
                                <div class="card-panel teal #00b8d4"><h4 class="left"><a class=" text-black"></a></h4><h4 align="center">Estado de la Habitación</h4></div>


                                <div class="row">
                                    <form class="col s12 pad">
                                        <div class="row">
                                            <div class="input-field input-field col s10">
                                                <i class="mdi-action-verified-user prefix icon-circleci"></i>
                                                <input id="descripcion_estado" type="number" class="validate center" >
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

                        <!--*******************fin modal tipo habitacion*************-->



                        <!--*******************seleccionar opcion*************-->
                        <div class="row">

                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class="icon-command #000000 black"></i></a>
                            </div>

                            <div class="input-field col s4">
                                <select id="tipohabitacion" type="text" class="validate" name="id_tipoh">
                                    <option value="" disabled selected>Selecciona Tipo de la Habitacion</option>
                                    <?php
                                    $result3=$datos[1];
                                    while ($row=mysqli_fetch_array($result3))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                    ?>
                                </select>
                                <label for="tipohabitacion" data-error="incorrecto" data-success="Correcto" >Tipo de Habitación</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_tipo_habitacion" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class="icon-command #000000 black"></i></a>
                            </div>

                            <div class="input-field col s4">
                                <select id="nomestadohabitacion" type="text" class="validate" name="nomestadohabitacion">
                                    <option value="" disabled selected>Selecciona Estado de la Habitacion</option>
                                    <?php
                                    $result2=$datos[3];
                                    while ($row=mysqli_fetch_array($result2))
                                    echo "<option value='{$row[0]}'>{$row[1]}</option>";
                                    ?>
                                </select>
                                <label for="nomestadohabitacion" data-error="incorrecto" data-success="Correcto"> Estado de la Habitación</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger " href="#modal_estado_habitacion" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                            </div>
                        </div>

                        <!--********************************-->

                        <!--********************************-->
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro" type="submit" name="action">Registrar</button>
                            </div>
                        </div>


                        <!-- Modal registro -->
                        <div id="modal_registro" class="modal">
                            <div class="modal-content">
                                <h5>Mensaje</h5>
                                    No se pueden registrar habitaciones sin datos
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
                <h4 align="center">Habitaciones Registradas</h4>
                <div class="divider"></div>

                <div class="row">
                    <div class="input-field col s4 offset-s8">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
                        <input id="buscar" placeholder="Buscar" type="text">
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
                        <th>id</th>
                        <th>Numero de Habitación</th>
                        <th>Descripción</th>
                        <th>Tipo Habitación</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>

                    </tr>
                    </thead>

                    <tbody>
                        <?php
                        $datos=$datos[0];
                            while($row=mysqli_fetch_array($datos))
                                echo "<tr><td>{$row[0]}</td>
                                <td>{$row['num_habitacion']}</td>
                                <td>{$row['descripcion_hab']}</td>
                                <td>{$row['tipo_ha']}</td><td>{$row['estado_ha']}</td>
                                <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></a></td>
                                <td><a class=\"btn-flat modal-trigger  icon-pencil blue-text\" href=\"#modal_editar\"></a></td></tr>";
                        ?>
                    </tbody>
                    <div class="divider"></div>
                </table>
                <div class="divider"></div>
                <!--********************************-->

            </div>
        </div>
    </div>
</div>
</body>
