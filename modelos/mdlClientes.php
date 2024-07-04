<?php
require_once("conexion.php");
class modeloClientes
{
    public static function mdlGuardarClientes($tabla, $data)
    {

        $stm = conexion::conectar()->prepare("INSERT INTO $tabla (cedula, nombres, apellidos, direccion, sexo, correo, telefono, f_nacimiento) VALUES (:cedula, :nombres, :apellidos, :direccion, :sexo, :correo, :telefono, :f_nacimiento)");
        $stm->bindParam(':cedula', $data['cedula'], PDO::PARAM_STR);
        $stm->bindParam(':nombres', $data['nombres'], PDO::PARAM_STR);
        $stm->bindParam(':apellidos', $data['apellidos'], PDO::PARAM_STR);
        $stm->bindParam(':direccion', $data['direccion'], PDO::PARAM_STR);
        $stm->bindParam(':sexo', $data['sexo'], PDO::PARAM_STR);
        $stm->bindParam(':correo', $data['correo'], PDO::PARAM_STR);
        $stm->bindParam(':telefono', $data['telefono'], PDO::PARAM_STR);
        $stm->bindParam(':f_nacimiento', $data['f_nacimiento'], PDO::PARAM_STR);
        if ($stm->execute()) {
            echo "<script>console.log('if: " . json_encode($data) . "' );</script>";
            return "ok";
        } else {
            return "error";
        }
    }
    //Funcion para cargar clientes de la base de datos 
    public static function mdlCargarClientes($tabla){
        $stm =conexion::conectar()->prepare("SELECT*FROM $tabla");
        $stm->execute();
        return $stm->fetchAll();


    }
}
