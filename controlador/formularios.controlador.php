<?php

class ControladorFormularios
{
    //registro
    static public function ctrRegistro(){
        if(isset($_POST['nombre'])){
            return "ok";
        }
    }
}