<?php

const SERVIDOR = 'localhost';
const USUARIO = 'root';
const PASSWORD = '';
const BD = 'sistemastock';

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
   // echo "Coneccion realizada";
}catch(PDOException $e){
    //print_r($e);
    echo "Error de coneccion";

}
$URL = "http://localhost/stock";
$URL1 = "http://localhost/stock/public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css";
$URL2 = "http://localhost/stock/public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css";
$URL3 = "http://localhost/stock/public/templates/AdminLTE-3.2.0/dist/img/user2-160x160.jpg";
$URL4 = "http://localhost/stock/plugins/jquery/jquery.min.js";
$URL5 = "http://localhost/stock/plugins/bootstrap/js/bootstrap.bundle.min.js";
$URL6 = "http://localhost/stock/dist/js/adminlte.min.js";

date_default_timezone_set("America/Argentina/Buenos_Aires");
$fechaHora=date('Y-m-d H:i:s');