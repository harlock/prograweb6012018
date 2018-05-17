<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 11:56 AM
 */

namespace Views;


new Template();
class Template
{
    public static function header()
    {
       /* echo "header y nav de mi proyecto";*/
       ?>
        <!DOCTYPE html>
        <!------------------------------------------------------------------------------->
        <html lang="en">
        <!------------------------------------------------------------------------------->
        <head>
            <meta charset="UTF-8">
            <link href="<?php echo URL?>/Public/css/materialize.min.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/style.min.css" type="text/css" rel="stylesheet">
            <link href="<?php echo URL?>/Public/css/custom.min.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="<?php echo URL?>/Public/style.css">
            <link rel="stylesheet" href="<?php echo URL?>/Public/css/stilo.css">
            <script type="text/javascript" src="<?php echo URL?>/Public/js/plugins/jquery-1.11.2.min.js"></script>
            <script type="text/javascript" src="<?php echo URL?>/Public/js/plugins/materialize.min.js"></script>
        <title>Inicio</title>
        </head>
        <!------------------------------------------------------------------------------->

        <!------------------------------------------------------------------------------->
        <body>
        <!------------------------------------------------------------>
            <header id="header" class="page-topbar">

                <div class="navbar-fixed">
                    <nav class="navbar-color">
                        <div class="nav-wrapper">
                            <ul class="left">
                                <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="<?php echo URL?>/public/imagenes/logo.gif" ></a></h1></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- end header nav-->
            </header>
        <!------------------------------------------------------------>
        <div >
            <!--Inicio Menu Vertical-->
            <div class="wrapper">
                <aside id="left-sidebar-nav">
                    <ul id="slide-out" class="side-nav fixed leftside-navigation">

                        <li class="user-details cyan darken-2">
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <img src="<?php echo URL?>/public/imagenes/cesar.PNG" alt="" class="circle responsive-img valign profile-image">
                                </div>
                                <div class="col col s8 m8 l8">
                                    <ul id="profile-dropdown" class="dropdown-content">
                                        <li><a href="#"></i> Perfil</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Salir</a>
                                        </li>
                                    </ul>
                                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn " href="#" data-activates="profile-dropdown">cesar Primero<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                    <p class="user-roal">Administrador</p>
                                </div>
                            </div>
                        </li>

                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="no-padding"><a class="collapsible-header waves-effect waves-cyan"><i class="icon-myspace"></i>Reservaciones</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="<?php echo URL?>habitaciones" class="icon-jira">   Habitaciones</a></li>
                                            <li><a href="<?php echo URL?>asignar_productos" class="icon-jira">   Asignar Productos</a></li>
                                            <li><a href="<?php echo URL?>checkin" class="icon-jira">   Check In</a></li>
                                            <li><a href="<?php echo URL?>checkout" class="icon-jira">   Check Out</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="no-padding"><a class="collapsible-header waves-effect waves-cyan"><i class="icon-simpleicons"></i>Servicios</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="<?php echo URL?>Servicios" class="icon-jira">   Servicios</a></li>
                                            <li><a href="<?php echo URL?>Asignacion_de_servicios" class="icon-jira">   Asignar Servicios</a></li>
                                            <li><a href="<?php echo URL?>Lavanderia" class="icon-jira">   Lavanderia</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="no-padding"><a class="collapsible-header waves-effect waves-cyan"><i class="icon-dropbox2"></i>Almacen</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="<?php echo URL?>Almacen" class="icon-jira">   Admin Almacen</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="no-padding"><a class="collapsible-header waves-effect waves-cyan"><i class="icon-user-check"></i>Empleados</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="<?php echo URL?>Empleados" class="icon-jira">   1</a></li>
                                            <li><a href="<?php echo URL?>Empleados" class="icon-jira">   2</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </aside>
            </div>
            <!--fin Menu Vertical-->
        </div>
        <!--<div class="divider"></div>---------------------------------------------------------->

        <!------------------------------------------------------------>
        <main>

        <?php
    }
    public static function footer()
    {
        ?>
        </main>
        <footer class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    <span>Copyright © 2018 <a class="grey-text text-lighten-4"></a> TESVB</span>
                    <span class="right">601 <a class="grey-text text-lighten-4" ></a></span>
                </div>
            </div>
        </footer>
        <!------------------------------------------------------------>

        <!------------------------------------------------------------->
        </body>
        <!------------------------------------------------------------------------------->
        </html>
        <?php
    }
}

