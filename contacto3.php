<?php
/**
 * @version 1.0
 */

require("class.phpmailer.php");
require("class.smtp.php");


//VARIABLES
$pads_tejidos_lavanda = $_POST["padstejidoslavanda"];
$pads_tejido_saqua = $_POST["padstejidosaqua"];
$pads_toalla_lavanda = $_POST["padstoallalavanda"];
$pads_toalla_aqua = $_POST["padstoallaaqua"];
$almohadilla_termica_lavrom = $_POST["almohadillatermicalavrom"];
$almohadilla_termica_mentamanza = $_POST["almohadillatermicamentamanza"];
$esponja_de_yute = $_POST["esponjadeyute"];
$bolsita_jabonera = $_POST["bolsitajabonera"];
$bolsa_lechevegetal = $_POST["bolsalechevegetal"];
$totebag_eco_natural = $_POST["totebageconatural"];
$totebag_eco_tostado = $_POST["totebagecotostado"];
$filtros_decafe = $_POST["filtrosdecafe"];
$cepillo_de_bamboo = $_POST["cepillodebamboo"];
$bolsas_para_perros = $_POST["bolsasparaperros"];
$bolsas_para_perros_pack = $_POST["bolsasparaperrospack"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$instagram = $_POST["instagram"];
$zona_de_retiro = $_POST["zonaderetiro"];
$pago = $_POST["pago"];

//DICCIONARIO

$cantidades = [
	"Pads tejidos x2 lavanda: " => $pads_tejidos_lavanda,
	"Pads tejidos x2 Aqua: " => $pads_tejidos_aqua,
    "Pads toalla x3 lavanda: " => $pads_toalla_lavanda,
    "Pads toalla x3 Aqua: " => $pads_toalla_aqua,
    "Almohadillas térmicas lavanda romero: " => $almohadilla_termica_lavrom,
    "Almohadillas térmicas menta manzanilla: " => $almohadilla_termica_mentamanza,
    "Esponja de yute: " => $esponja_de_yute,
    "Bolsita jabónera: " => $bolsita_jabonera ,
    "Bolsa leche vegetal: " => $bolsa_lechevegetal ,
    "Totebags ecológica natural: " => $totebag_eco_natural ,
    "Totebags ecológica tostado: " => $totebag_eco_tostado ,
    "Filtros de café N4 x2: " => $filtros_decafe ,
    "Cepillo de bamboo: " => $cepillo_de_bamboo ,
    "Bolsas biodegradables para perros: " => $bolsas_para_perros ,
    "Bolsas biodegradables para perros x8: " => $bolsas_para_perros_pack ,
];

$var16 ="nombre: ";
$var17 ="email: ";
$var18 ="celular: ";
$var19 ="instagram: ";
$var20 ="zonaderetiro: ";
$var21 ="pago: ";




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

$mail->Subject = "Nueva compra"; // Este es el titulo del email.
$mensaje_html = "";
foreach ($cantidades as $producto => $cantidad) {
	if ($cantidad > 0) {
        $mensaje_html .= ($producto).": ".($cantidad)."<br/>";
    }
}."$var16".($nombre)."<br />"."$var17".($email)."<br />"."$var18".($celular)."<br />"."$var19".($instagram)."<br />"."$var20".($zonaderetiro)."<br />"."$var21".($pago);

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