<?php
/**
 * @version 1.0
 */

require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["padstejidoslavanda"]) || !isset($_POST["padstejidosaqua"]) || !isset($_POST["padstoallalavanda"]) || !isset($_POST["padstoallaaqua"]) || !isset($_POST["almohadillatermicalavrom"]) || !isset($_POST["almohadillatermicamentamanza"]) || !isset($_POST["esponjadeyute"]) || !isset($_POST["bolsitajabonera"]) || !isset($_POST["bolsalechevegetal"]) || !isset($_POST["totebageconatural"]) || !isset($_POST["totebagecotostado"]) || !isset($_POST["filtrosdecafe"]) || !isset($_POST["cepillodebamboo"]) || !isset($_POST["bolsasparaperros"]) || !isset($_POST["bolsasparaperrospack"]) || !isset($_POST["nombre"]) || !isset($_POST["email"]) || !isset($_POST["celular"]) || !isset($_POST["instagram"]) || !isset($_POST["zonaderetiro"]) || !isset($_POST["pago"]))

{
    die ("Es necesario completar todos los datos del formulario");
}

$var1 ="Pads tejidos x2 lavanda: ";
$var2 ="Pads tejidos x2 Aqua: ";
$var3 ="Pads toalla x3 lavanda: ";
$var4 ="Pads toalla x3 Aqua: ";
$var5 ="Almohadillas térmicas lavanda romero: ";
$var6 ="Almohadillas térmicas menta manzanilla: ";
$var7 ="Esponja yute: ";
$var8 ="Bolsita jabón ducha: ";
$var9 ="Bolsa leche vegetal: ";
$var10 ="Totebags ecológica natural: ";
$var11 ="Totebags ecológica tostado: ";
$var12 ="Filtros de café N4 x2: ";
$var13 ="Cepillo de bamboo: ";
$var14 ="Bolsas biodegradables para perros: ";
$var15 ="Bolsas biodegradables para perros x8: ";
$var16 ="nombre: ";
$var17 ="email: ";
$var18 ="celular: ";
$var19 ="instagram: ";
$var20 ="zonaderetiro: ";
$var21 ="pago: ";

$padstejidoslavanda = $_POST["padstejidoslavanda"];
$padstejidosaqua = $_POST["padstejidosaqua"];
$padstoallalavanda = $_POST["padstoallalavanda"];
$padstoallaaqua = $_POST["padstoallaaqua"];
$almohadillatermicalavrom = $_POST["almohadillatermicalavrom"];
$almohadillatermicamentamanza = $_POST["almohadillatermicamentamanza"];
$esponjadeyute = $_POST["esponjadeyute"];
$bolsitajabonera = $_POST["bolsitajabonera"];
$bolsalechevegetal = $_POST["bolsalechevegetal"];
$totebageconatural = $_POST["totebageconatural"];
$totebagecotostado = $_POST["totebagecotostado"];
$filtrosdecafe = $_POST["filtrosdecafe"];
$cepillodebamboo = $_POST["cepillodebamboo"];
$bolsasparaperros = $_POST["bolsasparaperros"];
$bolsasparaperrospack = $_POST["bolsasparaperrospack"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$instagram = $_POST["instagram"];
$zonaderetiro = $_POST["zonaderetiro"];
$pago = $_POST["pago"];




// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "c2181054.ferozo.com";  // Dominio alternativo brindado en el email de alta
$smtpUsuario = "info@frera.com.ar";  // Mi cuenta de correo
$smtpClave = "Capuchosyperris21";  // Mi contraseña

// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = "info@frera.com.ar";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->IsHTML(true);
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost;
$mail->Username = $smtpUsuario;
$mail->Password = $smtpClave;

$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Compras sitio web"; // Este es el titulo del email.
$mensajeHtml = "$var1".($padstejidoslavanda)."<br />"."$var2".($padstejidosaqua)."<br />"."$var3".($padstoallalavanda)."<br />"."$var4".($padstoallaaqua)."<br />"."$var5".($almohadillatermicalavrom)."<br />"."$var6".($almohadillatermicamentamanza)."<br />"."$var7".($esponjadeyute)."<br />"."$var8".($bolsitajabonera)."<br />"."$var9".($bolsalechevegetal)."<br />"."$var10".($totebageconatural)."<br />"."$var11".($totebagecotostado)."<br />"."$var12".($filtrosdecafe)."<br />"."$var13".($cepillodebamboo)."<br />"."$var14".($bolsasparaperros)."<br />"."$var15".($bolsasparaperrospack)."<br />"."$var16".($nombre)."<br />"."$var17".($email)."<br />"."$var18".($celular)."<br />"."$var19".($instagram)."<br />"."$var20".($zonaderetiro)."<br />"."$var21".($pago) ;
$mail->Body = "{$mensajeHtml} <br /><br /> Frera.com.ar <br />"; // Texto del email en formato HTML"<br />"
$mail->AltBody = "{$comentario} \n\n <br /><br /> Frera.com.ar"; // Texto sin formato HTML
// FIN - Modificando //

$estadoEnvio = $mail->Send();
if($estadoEnvio){
    echo "<script>window.location.href='http://frera.com.ar/form/gracias.html';</script>";
} else {
    echo "<script>window.location.href='http://frera.com.ar/form/error.html';</script>";
}

/*
$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    echo "El correo fue enviado correctamente.";
} else {
    echo "Ocurrió un error inesperado.";
}
*/