<?php

namespace ChuchoYAsociados\Mascotas\model;
use ChuchoYAsociados\Mascotas\libs\Model;
class CategoryModel extends Model{

    function __construct(){
        parent::__construct();
    }
    function select (){

        $connection = $this -> db ->getConnection();

        $sql = "SELECT * FROM `categories`";

        $stm = $connection -> prepare($sql);
        $stm -> execute();

        return $stm -> fetchAll();
    }


}