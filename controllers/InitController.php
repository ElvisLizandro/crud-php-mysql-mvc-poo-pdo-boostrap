<?php

class InitController
{
    private $url = [];

    function __construct()
    {
        $this->init();
    }

    //metodos que qeueremos ejecutar consecutivamente
    private function init()
    {
        $this->init_load_config();

        $this->init_autoload();

        $this->RequestUrl();
    }


    // metodo para cargar la configuracion del sistema
    private function init_load_config()
    {
        $file = 'config.php';

        if (!is_file('config/' . $file))
        {
            die('El archivo ' . $file . ' es requerido que funcione');
        }

        require_once 'config/'. $file;
    }

    //metodo para cargar todos los archivos automaticamente
    private function init_autoload()
    {
        spl_autoload_register(function ($className){


            $modelFilePath = 'models/' . $className . '.php';

            $controllerfilePath = 'controllers/' . $className . '.php';

            if (file_exists($modelFilePath)){

                require_once $modelFilePath;

            } elseif (file_exists($controllerfilePath)){

                require_once $controllerfilePath;

            } else {

                throw new Exception("Clase '$className' no encontrada");
                
            }
        });
    }

    private function RequestUrl()
    {
        // Obtener la ruta de solicitud
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '/read';
        $url = explode('/', $url);

        print_r($url);


    }







}