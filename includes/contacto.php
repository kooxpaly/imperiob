<?php

$nombre         = filter_input(INPUT_POST, 'nombre',        FILTER_SANITIZE_SPECIAL_CHARS);
$correo         = filter_input(INPUT_POST, 'correo',        FILTER_SANITIZE_SPECIAL_CHARS);
$asunto       = filter_input(INPUT_POST, 'asunto',      FILTER_SANITIZE_SPECIAL_CHARS);
$comentarios    = filter_input(INPUT_POST, 'comentarios',   FILTER_SANITIZE_SPECIAL_CHARS);

$mensaje = "<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width,initial-scale=1'>
	<meta name='x-apple-disable-message-reformatting'>
	<title></title>
	<!--[if mso]>
	<noscript>
		<xml>
			<o:OfficeDocumentSettings>
				<o:PixelsPerInch>96</o:PixelsPerInch>
			</o:OfficeDocumentSettings>
		</xml>
	</noscript>
	<![endif]-->
	<style>
		table, td, div, h1, p {font-family: Arial, sans-serif;}
	</style>
</head>
<body style='margin:0;padding:0;'>
	<table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;'>
		<tr>
			<td align='center' style='padding:0;'>
				<table role='presentation' style='width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;'>
					<tr>
						<td align='center' style='padding:40px 0 30px 0;background:#000;'>
							<img src='https://banqueteraimperio.com/assets/img/icon/android-icon-192x192.png' alt='logo-imperio-b' width='300' style='height:auto;display:block;' />
						</td>
					</tr>
					<tr>
						<td style='padding:36px 30px 42px 30px;'>
							<table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;'>
								<tr>
									<td style='padding:0 0 36px 0;color:#153643;'>
										<h1 style='font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;'>Gracias por poneter en contacto</h1>
										<p style='margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'>
                                            Hola ".$nombre.", con mucho gusto atenderemos su solicitud, 
                                            usted nos comenta que: <br> 
                                            ".$comentarios."<br> 
                                            </p>
										<p style='margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'><a href='https://banqueteraimperio.com' style='color:#ee4c50;text-decoration:underline;'>https://banqueteraimperio.com</a></p>
									</td>
								</tr>
								<!--<tr>
									<td style='padding:0;'>
										<table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;'>
											<tr>
												<td style='width:260px;padding:0;vertical-align:top;color:#153643;'>
													<p style='margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'><img src='https://assets.codepen.io/210284/left.gif' alt='' width='260' style='height:auto;display:block;' /></p>
													<p style='margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, est nisi libero ultricies ipsum, in posuere mauris neque at erat.</p>
													<p style='margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'><a href='http://www.example.com' style='color:#ee4c50;text-decoration:underline;'>Blandit ipsum volutpat sed</a></p>
												</td>
												<td style='width:20px;padding:0;font-size:0;line-height:0;'>&nbsp;</td>
												<td style='width:260px;padding:0;vertical-align:top;color:#153643;'>
													<p style='margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'><img src='https://assets.codepen.io/210284/right.gif' alt='' width='260' style='height:auto;display:block;' /></p>
													<p style='margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'>Morbi porttitor, eget est accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed.</p>
													<p style='margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;'><a href='http://www.example.com' style='color:#ee4c50;text-decoration:underline;'>In tempus felis blandit</a></p>
												</td>
											</tr>-->
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style='padding:30px;background:#ee4c50;'>
							<table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;'>
								<tr>
									<td style='padding:0;width:50%;' align='left'>
										<p style='margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;'>
											&reg; Banquetera Imperio B 2022<br/><!--<a href='http://www.example.com' style='color:#ffffff;text-decoration:underline;'>Unsubscribe</a>-->
										</p>
									</td>
									<td style='padding:0;width:50%;' align='right'>
										<table role='presentation' style='border-collapse:collapse;border:0;border-spacing:0;'>
											<tr>
												<td style='padding:0 0 0 10px;width:38px;'>
													<!--<a href='http://www.twitter.com/' style='color:#ffffff;'><img src='https://assets.codepen.io/210284/tw_1.png' alt='Twitter' width='38' style='height:auto;display:block;border:0;' /></a>-->
												</td>
												<td style='padding:0 0 0 10px;width:38px;'>
													<a href='https://www.facebook.com/Imperio-B-169791443667509' style='color:#ffffff;'><img src='https://assets.codepen.io/210284/fb_1.png' alt='Facebook' width='38' style='height:auto;display:block;border:0;' /></a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>";


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
// include("../vendor/PHPMailer/PHPMailer/src");
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
include('../vendor/phpmailer/phpmailer/src/PHPMailer.php');
include('../vendor/phpmailer/phpmailer/src/Exception.php');
// include( '../vendor/phpmailer/phpmailer/src/OAuth.php');
// include( '../vendor/phpmailer/phpmailer/src/OAuthTokenProvider.php');
include('../vendor/phpmailer/phpmailer/src/SMTP.php');
// include( '../vendor/phpmailer/phpmailer/src/POP3.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();

try {
    //Server settings
    $mail->IsSMTP();
 
    //Configuracion servidor mail
    $mail->From = "info@banqueteraimperio.com"; //remitente
    $mail->FromName = "Equipo de administración";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls'; //seguridad
    $mail->Host = "smtp.ionos.mx"; // servidor smtp
    $mail->Port = 587; //puerto
    $mail->Username ='contacto@banqueteraimperio.com'; //nombre usuario
    $mail->Password = '19KvXmky^F&o14'; //contraseña

    //Agregar destinatario
    $mail->AddAddress("info@banqueteraimperio.com");
    $mail->addCC($correo);
    $mail->Subject = $asunto;
    $mail->Body = $mensaje;
    $mail->AltBody    = $mensaje;

        $mail->send();
        echo 'Mensaje enviado con exito!';
    } catch (Exception $e) {
        echo "Su mensaje no fue enviado. Error: {$mail->ErrorInfo}, Por favor, intente de nuevo, si el problema continua, no dude en mandar un mensaje al siguiente correo: contacto@banqueteraimperio.com";
    }