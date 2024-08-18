<?php

class UserModel{

    public function getUsers()
    {
        $conexion = new ConexionModel();
        $conn = $conexion->getConexion();
        $stmt = $conn->prepare("SELECT * FROM usuarios");

        if($stmt->execute()){
            $conexion->closeConexion();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $conexion->closeConexion();
            return false;
        }
    }
}