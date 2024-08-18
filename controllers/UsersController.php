<?php

class UsersController extends RenderController
{
    public function read()
    {
        $usuario = new UserModel();
        $usuarios = $usuario->getUsers();

        if(!$usuarios){
            $usuarios = "Error al listar usuarios";
        }
        
        RenderController::render('home', [
            'usuarios' => 'okey'
        ]);
         
    }
}