<?php 
	$destino = "contacto@alex-gh.xyz";
	$nombre = $_POST["name"];
	$email = $_POST["email"];
	$asunto = $_POST["asunto"];
	$mensaje = $_POST["texto"];

	$contenido = "Nombre: " . $nombre . 
				"\nCorreo: " . $email . 
				"\nAsunto: " . $asunto . 
				"\nMensaje: " . $mensaje;

if ( isset($nombre)  && !empty($nombre) &&
     isset($email)   && !empty($email)  &&
     isset($asunto)  && !empty($asunto) &&
     isset($mensaje) && !empty($mensaje) )
{
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		mail($destino, $asunto, $contenido);
		header("location:contac.php?id=true_mensaje");
	} 
	else
	{
		header("location:contac.php?id=false_mensaje");
	}
}
else
{
	header("location:contac.php?id=false_camp");
}
?>