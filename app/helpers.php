<?php

use Carbon\Carbon;

    //FUNCION HOY PARA PEDIDOSCONTROLLER
    function hoy(){
        $hoy = Carbon::yesterday()->toDateString();

        return $hoy;
    }
?>
