<?php
require_once ("conexion.php");
class modeloUsuarios {
    public static function mdlBuscarUsuario ($username, $passsword){
        $stm = conexion::conectar()->prepare("SELECT * FROM usuarios WHERE username=:user AND password=:pass");
        $stm->bindParam(":user", $username, PDO::PARAM_STR);
        $stm->bindParam(":pass", $passsword, PDO::PARAM_STR);
        $stm->execute();
        return $stm->fetch();
    }
}