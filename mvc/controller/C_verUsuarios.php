<?php

require('model/Conexion.php');

$conn = new Conexion();

$usuarios = $conn->getUsers();

require('views/V_usuarios.php');
