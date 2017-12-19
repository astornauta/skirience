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
  // Save db
    $hotsdb = "localhost";
    $basededatos = "skirience";
    $usuariodb = "root";
    $clavedb = "root";
    $tabla_db1 = "consulta";
    $tabla_db2 = "formulario";
    $conexion_db = mysqli_connect($hotsdb, $usuariodb, $clavedb, $basededatos) or die("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE". mysqli_error($conexion_db));
    if (isset($_POST["consulta"])) {
        $nombre = $_POST["name"];
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];
        $fecha = date("Y-m-d");
        $query_consulta = "INSERT INTO $tabla_db1 (`consulta_name`, `consulta_email`, `consulta_text`, `consulta_date`) VALUES ('$nombre','$email','$mensaje','$fecha')";
        mysqli_query($conexion_db, $query_consulta);
    }
    mysqli_close($conexion_db);
  if($saveToCSV !== false){
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
