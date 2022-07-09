<?php


    class asadera {
        
        // Creamos propiedad
        /*
            Public(publica): La propiedad se puede acceder fuera de la clase y es heredable
            Private(privada): La propiedad no puede ser accedida fuera de la clase y no es heredable
            Protected(protegida): Esta propiedad no se puede acceder fuera de la clase y es heredable
        */
        public $material;

        public $forma;

        public $tamaño;

        public $color;

        public $temperatura;

        // En el minuto 21:05 de la clase 2022-07-06 defini los metodos.
        public function __construct($color,$tamaño,$forma,$material){   
            /*
                Este metodo se encarga de construir la clase
            */
            $this->material     = $material;
            $this->forma        = $forma;
            $this->tamaño       = $tamaño;
            $this->color        = $color;
            $this->temperatura  = 20;

        }


        public function calentar(){
            /*
                Este metodo se encarga de subir la temperatura de la asadera
            */
            $this->temperatura = $this->temperatura + 10;
        }

        public function enfriar(){
            /*
                Este metodo se encarga de bajar la temperatura de la asadera
            */
            $this->temperatura = $this->temperatura - 10;
        }

    }


    $objAsadera = new asadera("Acero","Rectangulo","20*20","Verde");

    print_r($objAsadera->material);
    echo("<br>");
    print_r($objAsadera->forma);
    echo("<br>");















?>