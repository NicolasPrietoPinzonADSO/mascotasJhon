<?php

namespace ChuchoYAsociados\Mascotas\controller;

use ChuchoYAsociados\Mascotas\libs\Controller;

class MainController extends Controller {

    public function __construct()
    {
        
    }

    function index(){
        $data = [
            "titulo"    => "Home",
            "subtitulo" => "Saludo del sistema"
        ];
        $this -> view("home", $data);
    }
}