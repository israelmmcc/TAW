<?php
//Sesion iniciada 
session_start();
if(!$_SESSION["validar"])
{
	header("location:index.php?action=ingresar");
	exit();
}
//parametros editar
?>
<h1>EDITAR USUARIO</h1>
<form method="post">
		<?php
	$editarUsuario = new MvcController();
	$editarUsuario -> editarUsuarioController();
	$editarUsuario -> actualizarUsuarioController();

	?>
</form>