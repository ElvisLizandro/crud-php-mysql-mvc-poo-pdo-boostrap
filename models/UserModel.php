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

    //..getUser()

    public function createUser($data){
        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $email = $data['email'];
        $telefono = $data['telefono'];

        $conexion = new ConexionModel();
        $conn = $conexion->getConexion();

        $stmt = $conn->prepare("INSERT INTO usuarios (nombres, apellidos, email, telefono) VALUES (:NOMBRE, :APELLIDO, :EMAIL, :TELEFONO)
        ");
        
        $stmt->bindParam(':NOMBRE', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':APELLIDO', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':EMAIL', $email, PDO::PARAM_STR);
        $stmt->bindParam(':TELEFONO', $telefono, PDO::PARAM_STR);

        if($stmt->execute()){
            $conexion->closeConexion();
            return true;
        }else{
            $conexion->closeConexion();
            return false;
        }

    }

}