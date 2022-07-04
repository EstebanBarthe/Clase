<?php

    // Total de plata del cajero
    $totalPlata = 100000;
    // Maximo que se puede retirar
    $maximoSacar = 15000;
    // Respuesta que vamos a devolver
    $respuesta = "";
   
    $plataGuardada= 25000;
    // Plata que voy a sacar
    $plataRetirar = 14900;

    $recibo = false;

    $prestamo = "r";

   if($plataRetirar > $totalPlata){
        
    $respuesta = "Mijo no tenemos esa plata vuelva otra semana";

    }elseif($plataRetirar >= $maximoSacar){

        $respuesta = "Mijo no tenemos esa plata vuelva otra semana";

    }elseif($plataRetirar > $plataGuardada){

        $respuesta = "Mijo usted es pobre no puede sacar esa plata";

    }else{

        $respuesta = "Malgaste su dinero en un cafe bien caro";
        if($recibo){
            $respuesta .="<br> Imprimendo recibo te cobramos 1 peso por impresion";
        }else{
            $respuesta .="<br> Usted cuida el planeta";
        }
        switch($prestamo){
            case 1:
                $respuesta .="<br> Usted saco 10000";
                break;
            case 2:
                $respuesta .="<br> Usted saco 20000";
                break;
            case 3:
                $respuesta .="<br> Usted saco 30000";
                break;
            case 4:
                $respuesta .="<br> Usted saco 40000";
                break;
            default:
                $respuesta .="<br> Usted saco 200000";
                break;

        }

    }




   
   ?>

<html>
    <head>
    </head>
    <body>


        <h1>Respuesta:<?=$respuesta?></h1>
    <body>
</html>









