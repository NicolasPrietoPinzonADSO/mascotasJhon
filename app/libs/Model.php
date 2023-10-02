<?php
namespace ChuchoYAsociados\Mascotas\libs;
use ChuchoYAsociados\Mascotas\libs\Database;

class Model
{

    protected $connection;
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

}