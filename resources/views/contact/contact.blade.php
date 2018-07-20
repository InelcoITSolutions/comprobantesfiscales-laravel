@php

//======================================================================
// Variables
//======================================================================


//E-mail address. Enter your email
define("__TO__", "contacto@inelco.com.mx, luiz054@outlook.com");

//Success message
define('__SUCCESS_MESSAGE__', "¡Gracias! Nos pondremos en contacto en la brevedad posible.");

//Error message 
define('__ERROR_MESSAGE__', "Tu mensaje no pudo ser entregado. Intenta otra vez.");

//Messege when one or more fields are empty
define('__MESSAGE_EMPTY_FIELDS__', "Todos los campos son obligatorios.");


//======================================================================
// Do not change
//======================================================================

//E-mail validation
function check_email($email){
    if (!filter_var(trim($_POST['mail']), FILTER_VALIDATE_EMAIL)){
        return false;
    } else {
        return true;
    }
}

//Get data form and send mail
if(isset($_POST['name']) and isset($_POST['mail']) and isset($_POST['phone']) and isset($_POST['messageForm'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $subjectForm = $_POST['subjectForm'];
    $messageForm = $_POST['messageForm'];

    if($name == '') {
        echo json_encode(array('info' => 'error', 'msg' => "Por favor ingresa un nombre."));
        exit();
    } else if($mail == '' or check_email($mail) == false){
        echo json_encode(array('info' => 'error', 'msg' => "Por favor ingresa un e-mail válido."));
        exit();
    } else if($phone == ''){
        echo json_encode(array('info' => 'error', 'msg' => "Por favor ingresa un número telefónico."));
        exit();
    } else if($messageForm == ''){
        echo json_encode(array('info' => 'error', 'msg' => "Por favor ingresa un mensaje."));
        exit();
    } else {
        $to = __TO__;
        $subject = 'Contacto desde comprobantesfiscales.org - ' . $subjectForm . ' de parte de ' . $name;
        $message = '
        <html>
        <head>
          <title>Correo de '. $name .'</title>
        </head>
        <body>
          <table style="width: 500px; font-family: arial; font-size: 14px;" border="1">
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Nombre:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $name .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $mail .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $phone .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Asunto:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $subjectForm .'</td>
            </tr>
            <tr style="height: 32px;">
              <th align="right" style="width:150px; padding-right:5px;">Mensaje:</th>
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $messageForm  .'</td>
            </tr>
          </table>
        </body>
        </html>
        ';

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'De: ' . $mail . "\r\n";

        send_mail($to,$subject,$message,$headers);

        $headers_user  = 'MIME-Version: 1.0' . "\r\n";
        $headers_user .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers_user .= 'De: contacto@inelco.com.mx' . "\r\n";

        $to_user = $mail;
        $subject_user = '¡Gracias por contactar con nosotros!';
        $message_user = file_get_contents('email.html');
        send_mail($to_user,$subject_user,$message_user,$headers_user);

    }
} else {
    echo json_encode(array('info' => 'error', 'msg' => __MESSAGE_EMPTY_FIELDS__. 'ERROR - CAMPOS VACIOS'));
}

//Send mail
function send_mail($to,$subject,$message,$headers){
    if(@mail($to,$subject,$message,$headers)){
        echo json_encode(array('info' => 'success', 'msg' => __SUCCESS_MESSAGE__));
    } else {
        echo json_encode(array('info' => 'error', 'msg' => __ERROR_MESSAGE__ . 'ERROR AL ENVIAR DATOS'));
    }
}

@endphp