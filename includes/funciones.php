<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function cabeceraAdmin(){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="XXX" />
            <meta name="keywords" content="Ropa Skater,Camisetas" />
            <meta name="description" content="Camisetas Skater" />
            <title>Administrador Web....</title>

            <!-- Hojas de estilo --> 
            <link rel="shortcut icon" href="favicon.ico" />
            <link rel="stylesheet" href="css/estilo.css" type="text/css" />
            <link rel="stylesheet" href="../administrador/cssAdmin/admincss.css" type="text/css" />
            <!-- <link type="text/css" href="css/smoothness/jquery-ui-1.8.23.custom.css" rel="Stylesheet"> -->  
            <script src="../js/jquery-1.11.0.js"></script>
            <script>

                if(typeof jQuery!=='undefined'){
                console.log('jQuery Loaded');
                }	
                else{
                console.log('not loaded yet');
                }
            </script>
            <script src="../administrador/jsAdmin/funcionesAdmin.js"></script>


    <!-- 
    <script type="text/javascript" src="js/mootools.js"></script>
    <script type="text/javascript" src="js/moocheck.js"></script> -->


    </head>
    <?php
    
}

function cabeceraIndex(){
    ?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="keywords" content="XXX" />
            <meta name="keywords" content="Ropa Skater,Camisetas" />
            <meta name="description" content="Camisetas Skater" />
            <title>Bienvenido a Fuc....</title>

            <!-- Hojas de estilo --> 
            <link rel="shortcut icon" href="favicon.ico" />
            <link rel="stylesheet" href="css/estilo.css" type="text/css" />
            <link rel="stylesheet" href="../administrador/cssAdmin/admincss.css" type="text/css" />
            <link rel="stylesheet" href="css/styles_menu.css" type="text/css" />
            <!-- <link type="text/css" href="css/smoothness/jquery-ui-1.8.23.custom.css" rel="Stylesheet"> -->  
            <script src="js/jquery-1.11.0.js"></script>
            <script>

                    if(typeof jQuery!=='undefined'){
                    console.log('jQuery Loaded');
                    }	
                    else{
                    console.log('not loaded yet');
                    }
            </script>
            <script src="js/funciones.js"></script>


    <!-- 
    <script type="text/javascript" src="js/mootools.js"></script>
    <script type="text/javascript" src="js/moocheck.js"></script> -->


    </head>

    <?php
    
}

function devolverNivel(){
    //Este trozo nos devuelve los subniveles en los que se encuentra el archivo para 
    //poder hacer los includes  de manera dinamica en la aplicacion

    $uri = array();
    $uri = explode("/",$_SERVER['REQUEST_URI']);

    $nivel="";

    /*
     * Count mayor que 2 ya que la posicion 
     * 0 es el host 
     * 1 la carpeta de la aplicacion 
     * 2 el nombre del fichero inicial. 
     */
    if(count($uri)>2){
        for($i=0; $i< count($uri);$i++){
            if($i>2){
                $nivel .="../";
            }        
        }
    }

    return $nivel;
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}

function fecha_unix($fecha)
{
    
    if ($fecha!=NULL)
    {
        $array_fecha = explode("/",$fecha);
        $mes =$array_fecha[0];
        $dia= $array_fecha[1];
        $año= $array_fecha[2];
        $fechaOk = $año."-".$mes."-".$dia;
        //return mktime(0,0,0,$array_fecha[1],$array_fecha[0],$array_fecha[2]);
        return $fechaOk;
    }       
}


function getFechaInterfaz($fecha)
{
    
    if ($fecha!=NULL)
    {
        $auzfecha = explode("-", $fecha);
        $año= $auzfecha[0];
        $mes= $auzfecha[1];
        $dia= $auzfecha[2];

        $fechaOk = $mes."/".$dia."/".$año;
        //print_r($auzfecha);
        return $fechaOk;
    }       
}
?>
