<?php

    function miFuncion($texto, $fecha = "No trajo fecha", $colores = array() ){
  
        echo($texto."<br>");
        echo("Fecha:".$fecha."<br>");
        var_dump($colores);
    
    }

    function suma($valorA, $valorB){

        $respuesta = $valorA + $valorB;
    
    }

        
        $strTexto = "Hola yo viajo por parametro";
    
        $fecha = date("d-m-Y");

        $varTexto = "Texto que estoy escribiendo";

    miFuncion($strTexto, $strTexto);

        $varNumA = 10;
        $varNumB = 5;
    
        $respuesta = suma($varNumA, $varNumB);
    
    print_r("<br>Total es:".$respuesta);












?>