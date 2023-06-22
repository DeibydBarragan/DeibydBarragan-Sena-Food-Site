<?php

use Carbon\Carbon;

    //FUNCION HOY PARA PEDIDOSCONTROLLER
    function hoy(){
        $hoy = Carbon::today()->toDateString();

        return $hoy;
    }
?>