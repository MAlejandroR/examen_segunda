<?php
require "smarty/Smarty.class.php";

class Plantilla
{
    static  private $plantilla;

    /**
     * @return Smarty
     */
    public static function getPlantilla(): Smarty
    {
        self::$plantilla = new Smarty();
        self::$plantilla->template_dir="../vistas/plantillas";
        self::$plantilla->compile_dir="../vistas/plantillas_compiladas";
        return self::$plantilla;
    }

}