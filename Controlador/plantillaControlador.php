<?php

    class ControladorPlantilla
    {
        /*Llamada a la plantilla*/

        public function TraerPlantilla()
        {
            //include se utiliza para invocar archivos que contengan codigo html o php 
            include "Vista/plantilla.php";
        }
    }

?>