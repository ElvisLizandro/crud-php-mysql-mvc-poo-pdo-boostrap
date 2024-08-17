<?php

// Credenciales de la base de datos

// Conexion local o de desarrollo
define('LDB_ENGINE','mysql');
define('LDB_HOST','localhost');
define('LDB_NAME','crud_usuarios');
define('LDB_USER','root');
define('LDB_PASS','');
define('LDB_CHARSET','utf8');

// Conexion de produccion
define('DB_ENGINE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','crud_usuarios');
define('DB_USER','root');
define('DB_PASS','');
define('DB_CHARSET','utf8');

/**
* Se pueden añadir todas las configuraciones necesarias
*
* ejem
* controlador por defecto / metodo por defecto / controlador de errores por defecto
*   define('DEFAULT_CONTROLLER', 'home');
*   define('DEFAULT_ERROR_CONTROLLER', 'error');
*   define('DEFAULT_METHOD', 'index');
*/
