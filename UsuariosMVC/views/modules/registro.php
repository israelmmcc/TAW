<h1>REGISTRO DE USUARIO</h1>
<!--Formulario-->
<form method="post">
	<input type="text" placeholder="Usuario" name="usuarioRegistro" required>
	<input type="password" placeholder="Contraseña" name="passwordRegistro" required>
	<input type="email" placeholder="Email" name="emailRegistro" required>
	<input type="submit" value="Enviar">

</form>
<?php
//Enviar los datos al controlador MvcController 
$registro = new MvcController();

//se invoca la función registroUsuarioController de la clase
$registro -> registroUsuarioController();
if(isset($_GET["action"]))
{
	if($_GET["action"] == "ok"){
		echo "Registro Exitoso";
	}
}
?>