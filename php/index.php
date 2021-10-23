<?php
$destinatario = 'institutopijaosugerencias@gmail.com';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$header = "Enviado desde la pagina del Prae";
$mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $nombre, $correo, $mensajecompleto, $header );
echo "<script>alert('Correo Enviado Excitosamente')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000</script>";
<?