<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 12/09/14
 * Time: 05:31 PM
 */
require_once 'Personas.php';
class Docentes extends Personas{

    public function enseniar()
    {
        echo utf8_decode('estoy enseñando');
    }
}

$docentes = new Docentes();
$docentes->enseniar();