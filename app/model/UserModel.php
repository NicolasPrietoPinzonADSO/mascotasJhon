<?php

namespace ChuchoYAsociados\Mascotas\model;

use ChuchoYAsociados\Mascotas\libs\Model;

class UserModel extends Model
{
 function __construct()
 {
    parent::__construct();
 }
 function validate($user, $password)
 {
    $password = hash_hmac("sha512", $password, MASTER);
    $password = substr($password, 0, 50);

    $connection = $this->db->getConnection();

    $sql = "SELECT * FROM users WHERE 	email = :correo AND password = :clave";

    $stm = $connection->prepare($sql);
    $stm->bindValue(":clave", $password);
    $stm->bindValue(":correo", $user);
    $stm->execute();

    return $stm->fetch();
 }

 function insert($user, $mail, $passwor){
   $passwor = hash_hmac("sha512", $passwor, MASTER);
   $passwor = substr($passwor, 0, 50);

   $connection = $this->db->getConnection();

   $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (:nombre, :correo, :contra)";

   $stm = $connection -> prepare($sql);
   $stm ->bindValue(':nombre',$user);
   $stm ->bindValue(':correo',$mail);
   $stm ->bindValue(':contra',$passwor);
   $stm -> execute();

   return $stm-> rowCount();
 }

}