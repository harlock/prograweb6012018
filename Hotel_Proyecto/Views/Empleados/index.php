<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17/05/2018
 * Time: 06:00 PM
 */
?>
<div id="main">
    <div id="panel1" class="row col pad">
        <div class="col s12 m10 offset-m1">
            <div class="card-panel">
                <h4 class="left"><a class="icon-user-tie black-text"></a></h4>
                <h4 align="center">Empleados</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
                <div class="row">
                    <!--********************************-->
                    <form class="col s12 right-alert">
                        <div class="row">
                            <div class="input-field col s4">
                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                <input id="Nombre_empleado" type="text" class="validate">
                                <label for="Nombre_empleado"  data-error="incorrecto" data-success="Correcto">Nombre del empleado</label>
                            </div>
                            <div class="input-field col s4">
                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                <input id="Apellido_paterno" type="text" class="validate">
                                <label for="Apellido_paterno"  data-error="incorrecto" data-success="Correcto">Apellido paterno</label>
                            </div>
                            <div class="input-field col s4">
                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                <input id="Apellido_materno" type="text" class="validate">
                                <label for="Apellido_materno"  data-error="incorrecto" data-success="Correcto">Apellido materno</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class="icon-command #000000 black"></i></a>
                            </div>

                            <div class="input-field col s4 ">
                                <select id="puesto" type="text" class="validate">
                                    <option value="" disabled selected>Selecciona puesto</option>
                                    <option value="1">puesto 1</option>
                                    <option value="2">puesto 2</option>
                                    <option value="3">puesto 3</option>
                                </select>
                                <label for="puesto" data-error="incorrecto" data-success="Correcto" >puesto</label>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('select').formSelect();
                                    });
                                </script>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger" href="#modal_puesto" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled"><i class="icon-clock2 #000000 black"></i></a>
                            </div>

                            <div class="input-field col s1 ">

                                <label  data-error="incorrecto" data-success="Correcto"> Turno</label>

                            </div>

                            <div class="input-field col s1">
                                <a class="btn-floating disabled waves-effect waves-light btn modal-trigger " href="#modal_turnos" ><i class="icon-plus #00838f cyan darken-3"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right #0097a7 cyan darken-2 modal-trigger"  href="#modal_registro" type="submit" name="action">Registrar</button>
                            </div>
                        </div>
                        <!--***************modal puesto*****************-->
                        <div id="modal_puesto" class="modal center-align ">
                            <div class="modal-content">
                                <div class="card-panel teal #00b8d4"><h4>Puesto</h4></div>
                                <div class="row">
                                    <form class="col s12 ">
                                        <div class="row">
                                            <div class="input-field input-field col s10 text">
                                                <i class="mdi-action-verified-user prefix icon-pencil"></i>
                                                <input id="desc_puesto" type="text" class="validate center" >
                                                <label for="desc_puesto"  data-error="Incorrecto" data-success="Correcto" >Descripción del Puesto</label>
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

                        <!--*******************fin modal puesto*************-->


                        <!--***************modal estado habitacion*****************-->
                        <div id="modal_turnos" class="modal center-align ">
                            <div class="modal-content">
                                <div class="card-panel teal #00b8d4"><h4>Horarios</h4></div>

                                <div class="row">
                                    <form class="col s12 pad">

                                        <div class="row">
                                            <div class="col l3 offset-l1">
                                                <label>Hora de entrada</label>
                                                <input type="time" class="timepicker">
                                                <script type="text/javascript">
                                                    $(document).ready(function(){
                                                        $('.timepicker').timepicker();
                                                    });
                                                </script>
                                            </div>
                                            <div class="col l3 offset-l1">
                                                <label>Hora de salida</label>
                                                <input type="time" class="timepicker">
                                                <script type="text/javascript">
                                                    $(document).ready(function(){
                                                        $('.timepicker').timepicker();
                                                    });
                                                </script>
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

                        <div id="modal_registro" class="modal">
                            <div class="modal-content">
                                <div align="center" class="card-panel teal #00b8d4"><h5>Registro exitoso</h5></div>

                                <div  class="divider"></div>
                                <table>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>Puesto</th>
                                        <th>Turno</th>

                                        <th></th>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>Jonathan</td>
                                        <td>Valdez</td>
                                        <td>Marinez</td>
                                        <td>jardinero</td>
                                        <td>matutino</td>
                                    </tr>
                                </table>
                                <div class="divider"></div>

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

    <div id="paneltablas" class="row col ">
        <div class="col s12 m10 offset-m1">
            <div class="card-panel">
                <h4 align="center">Registro de empleados</h4>
                <div class="divider"></div>

                <div class="row">
                    <div class="input-field col s4 offset-s8">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
                        <input id="buscar" type="text">
                    </div>
                </div>
                <!-- Modal eliminar -->
                <div id="modal_eliminar" class="modal">
                    <div class="modal-content">
                        <div class="card-panel teal #00b8d4"><h5>¿Desea Eliminar el Registro?</h5></div>
                        <div class="divider"></div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                    </div>
                </div>
                <!-- Modal editar -->
                <div id="modal_editar" class="modal">
                    <div class="modal-content">
                        <div class="card-panel teal #00b8d4"><h5>¿Desea editar el Registro?</h5></div>
                        <div class="divider"></div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                    </div>
                </div>
                <!--*********************final modal eliminar***********-->
                <table class="centered">
                    <div class="divider"></div>
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Puesto</th>
                        <th>Hora entrada</th>
                        <th>Hora salida</th>
                        <th></th>
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
                        <td>{$row[5]}</td>
                        <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></a></td>
                        <td><a class=\"btn-flat modal-trigger  icon-pencil blue-text\" href=\"#modal_editar\"></a></td>
                    </tr>
                    ";
                    ?>
                    </tbody>
                </table>
                <div class="divider"></div>
            </div>
        </div>
    </div>
</div>