<?php


session_start();
if (isset($_SESSION['sesion_email'])){
    // echo "existe";
    $email_sesion= $_SESSION['sesion_email'];
    $sql = "SELECT * FROM tb_usuarios WHERE email ='$email_sesion'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($usuarios as $usuario){
        $nombres_sesion = $usuario['nombres'];
    }
}else{
    echo "no existe";
    header('Location:'.$URL.'/login');
}
