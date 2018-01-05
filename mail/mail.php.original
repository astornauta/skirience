<?php

 /*----------------------------------------------------------------------------*\
|*  Email settings for sending all emails from your website forms.              *|
 \*============================================================================*/

// Choose here whether to use php mail() function or your SMTP server (recommended) to send the email.
// Use 'smtp' for better reliability, or use 'phpmail' for quick + easy setup with lower reliability.
$emailMethod                = 'smtp'; // REQUIRED value. Options: 'smtp' , 'phpmail'

// Outgoing Server Settings - replace values on the right of the = sign with your own.
// These 3 settings are only required if you choose 'smtp' for emailMethod above.
$outgoingServerAddress      = 'smtp.gmail.com'; // Consult your hosting provider.
$outgoingServerPort         = '465';                  // Options: '587' , '25' - Consult your hosting provider.
$outgoingServerSecurity     = 'ssl';                 // Options: 'ssl' , 'tls' , null - Consult your hosting provider.

// Sending Account Settings - replace these details with an email account held on the SMTP server entered above.
// These 2 settings are only required if you choose 'smtp' for emailMethod above.
$sendingAccountUsername     = 'tiincho.alvarez@gmail.com';
$sendingAccountPassword     = 'dsfdsffsdsfdf';

// Recipient (To:) Details  - Change this to the email details of who will receive all the emails from the website.
$recipientEmail             = 'tiincho.alvarez+receiver@gmail.com'; // REQUIRED value.
$recipientName              = 'Skirience';             // REQUIRED value.

// Email details            - Change these to suit your website needs
$emailSubject               = 'Nuevo mensaje desde el sitio web Skirience'; // REQUIRED value. Subject of the email that the recipient will see
$websiteName                = 'Skirience';                // REQUIRED value. This is used when a name or email is not collected from the website form

$timeZone                   = 'America/Argentina/Mendoza';         // OPTIONAL, but some servers require this to be set.
                                                             // See a list of all supported timezones at: http://php.net/manual/en/timezones.php

// Google reCAPTCHA
$recaptchaSecretKey         = '6LeqxjsUAAAAADCCgWKLCU37tbPtHGa0KPdWR5TA';
$recaptchaErrorMessage      = 'Hubo un problema al verificar Google reCaptcha. Inténtalo de nuevo.';

// Confirmation Message
$sendConfirmationToUser     = false; // leave false to disable confirmation, or use path to an html email template.
$confirmationSubject        = "Gracias por contactar a Skirience"; // The subject of the confirmation email
$confirmationFromName       = "Skirience"; // Used in the "from" field of the email.
$userEmailField             = "email";
$defaultUserName            = "Futuro cliente"; // Used if the form does not include a "name" field.

// CSV
$saveToCSV                  = "../../consultas.csv";

 /*----------------------------------------------------------------------------*\
|*  You do not need to edit anything below this line, the rest is automatic.    *|
 \*============================================================================*/
include('lib/mail_sender.php');

?>
