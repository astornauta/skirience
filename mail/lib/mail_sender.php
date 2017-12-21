<?php

//error_reporting(-1);
//ini_set('display_errors', 'On');


// Set default timezone as some servers do not have this set.
if(isset($timeZone) && $timeZone != ""){
  date_default_timezone_set($timeZone);
}
else{
  date_default_timezone_set("UTC");
}

// If the form has been submitted with a captcha, check it - if it fails from Google, exit the script after returning an error message.
if(isset($_POST['g-recaptcha-response']) && isset($_POST['captcha'])){


    $response = "";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptchaSecretKey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);

    $response = json_decode( $response , true );

    if($response['success'] == false)
    {
        echo $recaptchaErrorMessage;
        exit;
    }else{
      unset($_POST['g-recaptcha-response']);
    }
}


// Require the Swift Mailer library
require_once 'swift_required.php';

$messageText = "";

// Get Basic HTML template for sending email with user's input.
$htmlHead = file_get_contents('head.html');
$htmlFoot = file_get_contents('foot.html');


if($emailMethod == 'phpmail'){
  $transport = Swift_MailTransport::newInstance();
}elseif($emailMethod == 'smtp'){
    $transport = Swift_SmtpTransport::newInstance( $outgoingServerAddress, $outgoingServerPort, $outgoingServerSecurity )
    ->setUsername( $sendingAccountUsername )
    ->setPassword( $sendingAccountPassword );
}

$mailer = Swift_Mailer::newInstance($transport);

// Creating the message text using fields sent through POST
foreach ($_POST as $key => $value)
{
  if($key !== 'consulta' && $key !== 'formulario' && $value !== '' && $key !=='url' && $key !== 'g-recaptcha-response' && $key !== 'captcha'){// Sets of checkboxes will be shown as comma-separated values as they are passed in as an array.
      if(is_array($value)){
          $value = implode(', ' , $value);
      }
      $messageText .= '<li><b>'.ucfirst($key).":</b> ".$value."</li>";
  }
}

if(isset($_POST['email']) && isset($_POST['name']) ){
  $fromArray = array($_POST['email'] => $_POST['name']);
}else{ $fromArray = array($sendingAccountUsername => $websiteName); }

$message = Swift_Message::newInstance($emailSubject)
  ->setSender(array($sendingAccountUsername => $websiteName))
  ->setFrom($fromArray)
  ->setReplyTo($fromArray)
  ->setTo(array($recipientEmail => $recipientName))->setBody($htmlHead.$messageText.$htmlFoot, 'text/html');

// Send the message or catch an error if it occurs.
try{
  echo($mailer->send($message));
  // Prepara conexión DB
        $hotsdb = "localhost";
        $basededatos = "skirience";
        $usuariodb = "root";
        $clavedb = "root";
        $conexion_db = mysqli_connect($hotsdb, $usuariodb, $clavedb, $basededatos) or die("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE". mysqli_error($conexion_db));

        if (isset($_POST["formulario"])) {
          // Preparo variables
          $name = $_POST['name'];
          $email = $_POST['email'];
          $lugar_inicio_viaje = $_POST['inicio_viaje'];
          empty($_POST['Aspen_Snowmass,Colorado']) ? $destino_aspen_colorado = 'NO' : $destino_aspen_colorado = 'SI';
          empty($_POST['Sankt_Anton,Austria']) ? $destino_sankt_austria = 'NO' : $destino_sankt_austria = 'SI';
          empty($_POST['Vail,Colorado']) ? $destino_vail_colorado = 'NO' : $destino_vail_colorado = 'SI';
          empty($_POST['Baqueira_Beret,España']) ? $destino_baqueria_españa = 'NO' : $destino_baqueria_españa = 'SI';
          empty($_POST['Niseko,Japon']) ? $destino_niseko_japon = 'NO' : $destino_niseko_japon = 'SI';
          empty($_POST['otro_destino']) ? $destino_otro = 'NO' : $destino_otro = $_POST['otro_destino'];
          $fecha_aprox_inicio = $_POST['fecha_aproximada_inicio'];
          $cantidad_dias = $_POST['cantidad_dias'];
          $fecha_desde = $_POST['fecha_desde'];
          $fecha_hasta = $_POST['fecha_hasta'];
          empty($_POST['fechas_flexibles']) ? $fechas_flexibles = 'NO' : $fechas_flexibles = 'SI';
          $cantidad_personas = $_POST['cantidad_personas'];
          $cantidad_niños = $_POST['cantidad_niños'];
          $edad_promedio_niños = $_POST['edad_promedio_niños'];
          $preferencia_hotel = $_POST['preferencia_hotel'];
          empty($_POST['alquilar_equipo']) ? $alquiler_equipo = 'NO' : $alquiler_equipo = 'SI';
          empty($_POST['tomara_clases']) ? $tomar_clases = 'NO' : $tomar_clases = 'SI';
          empty($_POST['Esquiar']) ? $objetivo_esquiar = 'NO' : $objetivo_esquiar = 'SI';
          empty($_POST['Familia']) ? $objetivo_familia = 'NO' : $objetivo_familia = 'SI';
          empty($_POST['Vida_Nocturna']) ? $objetivo_vida_nocturna = 'NO' : $objetivo_vida_nocturna = 'SI';
          empty($_POST['Relax/Spa']) ? $objetivo_relax_spa = 'NO' : $objetivo_relax_spa = 'SI';
          empty($_POST['Shopping']) ? $objetivo_shopping = 'NO' : $objetivo_shopping = 'SI';
          empty($_POST['otro_objetivo']) ? $objetivo_otro = 'NO' : $objetivo_otro = $_POST['otro_objetivo'] ;
          empty($_POST['observaciones']) ? $observaciones = 'NO' : $observaciones = $_POST['observaciones'];
          $fecha = date("Y-m-d");

          // Guardo en DB
          $tabla_db = "formulario";
          $query_formulario= "INSERT INTO $tabla_db (`name`, `email`, `lugar_inicio_viaje`, `destino_aspen_colorado`, `destino_sankt_austria`, `destino_vail_colorado`, `destino_baqueria_espana`, `destino_niseko_japon`, `destino_otro`, `fecha_aprox_inicio`, `cantidad_dias`, `fecha_desde`, `fecha_hasta`, `fechas_flexibles`, `cantidad_personas`, `cantidad_ninos`, `edad_promedio_ninos`, `preferencia_hotel`, `alquiler_equipo`, `tomar_clases`, `objetivo_esquiar`, `objetivo_familia`, `objetivo_vida_nocturna`, `objetivo_relax_spa`, `objetivo_shopping`, `objetivo_otro`, `observaciones`, `fecha_envio`) VALUES ('$name', '$email', '$lugar_inicio_viaje', '$destino_aspen_colorado', '$destino_sankt_austria', '$destino_vail_colorado', '$destino_baqueria_españa', '$destino_niseko_japon', '$destino_otro', '$fecha_aprox_inicio', '$cantidad_dias', '$fecha_desde', '$fecha_hasta', '$fechas_flexibles', '$cantidad_personas', '$cantidad_niños', '$edad_promedio_niños', '$preferencia_hotel', '$alquiler_equipo', '$tomar_clases', '$objetivo_esquiar', '$objetivo_familia', '$objetivo_vida_nocturna', '$objetivo_relax_spa', '$objetivo_shopping', '$objetivo_otro', '$observaciones', '$fecha')";
          mysqli_query($conexion_db, $query_formulario);

        }
    mysqli_close($conexion_db);
    
    if ($saveToCSV !== false){
    // Save to CSV file
    $file = fopen($saveToCSV, 'a');
    $data = array_values($_POST);
    $data = array_merge(array( date("Y-m-d H:i:s")), $data);

    fputcsv_eol($file, $data,"\n");
    fclose($file);
  }
}
catch(Exception $e){
    echo($e->getMessage());
}

if($sendConfirmationToUser !== false){

    // Get the confirmation template from mail.php - if it is false, no confirmation will be sent.
    $confirmationTemplate = file_get_contents($sendConfirmationToUser);

    if($emailMethod == 'phpmail'){
        $transport = Swift_MailTransport::newInstance();
    }elseif($emailMethod == 'smtp'){
        $transport = Swift_SmtpTransport::newInstance( $outgoingServerAddress, $outgoingServerPort, $outgoingServerSecurity )
        ->setUsername( $sendingAccountUsername )
        ->setPassword( $sendingAccountPassword );
    }
    $mailer = Swift_Mailer::newInstance($transport);
    if(isset($_POST[$userEmailField])){
        if(isset($_POST['name'])){
            $userName = $_POST['name'];
        }else{
           $userName = $defaultUserName;
        }

        $message = Swift_Message::newInstance($confirmationSubject)
          ->setFrom(array($sendingAccountUsername => $confirmationFromName))
          ->setTo(array($_POST[$userEmailField] => $userName))->setBody($confirmationTemplate, 'text/html');

         // Send the message or catch an error if it occurs.

          $mailer->send($message);
    }else{
        exit;
    }
}


exit;

function fputcsv_eol($fp, $array, $eol) {
  fputcsv($fp, $array,',', '"');
  if("\n" != $eol && 0 === fseek($fp, -1, SEEK_CUR)) {
    fwrite($fp, $eol);
  }
}
?>
