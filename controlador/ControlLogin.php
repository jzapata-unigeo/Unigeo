<?php
session_start();
include '../Modelo/ModelLogin.php';
$usuario = htmlspecialchars(addslashes($_POST['usuario']));
$password = htmlspecialchars(addslashes($_POST['password']));
$fun = new ModeloLogin();
echo 'usuario'. $password;
$fun->checklogin($usuario, $password);


