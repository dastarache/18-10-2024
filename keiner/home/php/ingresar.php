<a href="registrar.php">registar</a>
<br>
<a href="consultar.php">consultar</a>
<br>
<a href="../home.php">menu</a>
<br>

<?php
$usuario=$_GET['usuario'];
$contraseña=$_GET['contraseña'];
require('../funciones/db.php');
echo ingresar($usuario,$contraseña);

?>




