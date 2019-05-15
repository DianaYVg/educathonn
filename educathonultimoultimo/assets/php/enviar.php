<?php
	$destino="mafer.martinez@ibm.com";
	$nombre =$_POST["name"];
	$correo=$_POST["mail"];
	$mensaje=$_POST["mensaje"];
	$universidad=$_POST["universidad"];


	$contenido= "Nombre del profesor: ". $nombre."\nUniversidad: ".$universidad."\nCorreo: ".$correo."\nDejo su área de especialización : ".$mensaje;

	$invitado="Gracias por confirmar tu asistencia". $nombre." \nEn breve recibirás detalles del lugar y acceso a <bold> EDUCATHON </bold>. \n \n Se llevará acabo los días 1, 2 y 3 de Julio de 2019.";

	mail($correo, "Educathon confirmación", $invitado);
	mail($destino,"Asistencia",$contenido);
	header("Location:confirmacion.html");
?>
