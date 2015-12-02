
<?php
/*Proyecto final de DA Web
Integrantes: Alfaro Diaz Rosario
             Valencia Quille Jaime
Descripcion:
            Nuestro Proyecto trata de un miniblog, donde el usuario podria subir post, comentarlos, calificarlos y ver los mas punteados. 
*/

session_start();

$view = isset($_GET['view']) ? $_GET['view'] : 'index';
require('core/libs/smarty/Smarty.class.php');
require('core/modelos/class.Conexion.php');

if(file_exists('core/controladores/'.$view.'Controlador.php')){
    include('core/controladores/'.$view.'Controlador.php');
    
} else{
    include('core/controladores/indexControlador.php');
}

?>
