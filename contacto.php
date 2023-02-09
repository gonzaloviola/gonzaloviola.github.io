<?php
$nombre = $_POST['nombre'];
$email = $_POST['apellido'];
$email = $_POST['email'];
$email = $_POST['celular'];
$mensaje = $_POST['mensaje'];
$para = 'gonzaviola33@gmail.com';
$titulo = 'gonzaloviola.com.ar';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n 
				Apellido: $apellido\n 
				E-Mail: $email\n
				Celular: $celular\n  
				Mensaje: $mensaje\n";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://www.gonzaloviola.com.ar';
</script>";
} else {
echo 'Fall&oacute; el envio';
}
}
?>
<?php


?>