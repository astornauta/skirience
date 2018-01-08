<?php

  // $to = "reservas@skirience.com";
  $to = "reservas@skirience.com";

  // Prepara conexión DB
  include("open_conexion.php");

  if (isset($_POST["consulta"])) {
      // Setea variables de consulta
      $nombre = $_POST["name"];
      $email = $_POST["email"];
      $mensaje = $_POST["mensaje"];

      //Prepara mail
      $subject = "Consulta desde Web";
      $message = "Nombre: " . $nombre;
      $message .= "<br><br>Email: " . $email;
      $message .= "<br><br>Mensaje: " . $mensaje;
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
      $headers .= "From: Formulario Web <web@skirience.com>". "\r\n";
      $headers .= "Reply-To: ".$nombre." <".$email.">". "\r\n";

  } elseif (isset($_POST["formulario"])) {
      // Preparo variables
      $name = $_POST['name'];
      $email = $_POST['email'];
      $lugar_inicio_viaje = $_POST['inicio_viaje'];
      empty($_POST['Chapelco,San_Martin_de_los_Andes']) ? $destino_chapelco = 'NO' : $destino_chapelco = 'SI';
      empty($_POST['Aspen_Snowmas,Colorado']) ? $destino_aspen_colorado = 'NO' : $destino_aspen_colorado = 'SI';
      empty($_POST['Baquera_Beret,España']) ? $destino_baqueria_españa = 'NO' : $destino_baqueria_españa = 'SI';
      empty($_POST['Niseko,Japon']) ? $destino_niseko_japon = 'NO' : $destino_niseko_japon = 'SI';
      empty($_POST['Las_Lenas,Argentina']) ? $destino_laslenas_argentina = 'NO' : $destino_laslenas_argentina = 'SI';
      empty($_POST['Grandvalira,Andorra']) ? $destino_grandvalira_andorra = 'NO' : $destino_grandvalira_andorra = 'SI';
      empty($_POST['Sierra_Nevada,España']) ? $destino_sierra_nevada = 'NO' : $destino_sierra_nevada = 'SI';
      empty($_POST['otro_destino']) ? $destino_otro = 'NO' : $destino_otro = $_POST['otro_destino'];
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
      $query_formulario= "INSERT INTO $tabla_db (`name`, `email`, `lugar_inicio_viaje`, `destino_chapelco`, `destino_aspen_colorado`, `destino_laslenas_argentina`, `destino_grandvalira_andorra`, `destino_baqueria_espana`, `destino_niseko_japon`,`destino_sierra_nevada`, `destino_otro`, `fecha_desde`, `fecha_hasta`,`fechas_flexibles`, `cantidad_personas`, `cantidad_ninos`, `edad_promedio_ninos`, `preferencia_hotel`, `alquiler_equipo`, `tomar_clases`, `objetivo_esquiar`, `objetivo_familia`, `objetivo_vida_nocturna`, `objetivo_relax_spa`, `objetivo_shopping`, `objetivo_otro`, `observaciones`, `fecha_envio`) VALUES ('$name', '$email', '$lugar_inicio_viaje',' $destino_chapelco', '$destino_aspen_colorado', '$destino_laslenas_argentina', '$destino_grandvalira_andorra', '$destino_baqueria_españa', '$destino_niseko_japon','$destino_sierra_nevada', '$destino_otro', '$fecha_desde', '$fecha_hasta', $fechas_flexibles, '$cantidad_personas', '$cantidad_niños', '$edad_promedio_niños', '$preferencia_hotel', '$alquiler_equipo', '$tomar_clases', '$objetivo_esquiar', '$objetivo_familia', '$objetivo_vida_nocturna', '$objetivo_relax_spa', '$objetivo_shopping', '$objetivo_otro', '$observaciones', '$fecha')";
      mysqli_query($conexion_db, $query_formulario);
      //Prepara archivo csv
      include('lib/saveCSV.php');
      //Prepara mail
      $subject = "Encuesta desde Web";
      $message = "<b>Nombre:</b> " . $nombre;
      $message .= "<br><br><b>Email:</b> " . $email;
      $message .= "<br><br><b>Lugar de inicio del viaje:</b> " . $lugar_inicio_viaje;
      $message .= "<br><br><u>DESTINOS</u> ";
      $message .= "<br><br><b>Aspen Colorado:</b> " . $destino_aspen_colorado;
      $message .= "<br><br><b>Chapelco:</b> " . $destino_chapelco;
      $message .= "<br><br><b>Las Leñas Argentina:</b> " . $destino_laslenas_argentina;
      $message .= "<br><br><b>Grandvalira Andorra:</b> " . $destino_grandvalira_andorra;
      $message .= "<br><br><b>Baqueria España:</b> " . $destino_baqueria_españa;
      $message .= "<br><br><b>Sierra Nevada España:</b> " . $destino_sierra_nevada;
      $message .= "<br><br><b>Niseko Japón:</b> " . $destino_niseko_japon;
      $message .= "<br><br><b>Otro:</b> " . $destino_otro;
      $message .= "<br><br>";
      $message .= "<br><br><u>FECHAS</u> ";
      $message .= "<br><br><b>Fecha desde:</b> " . $fecha_desde;
      $message .= "<br><br><b>Fecha hasta:</b> " . $fecha_hasta;
      $message .= "<br><br><b>Fechas flexibles:</b> " . $fechas_flexibles;
      $message .= "<br><br>";
      $message .= "<br><br><u>PERSONAS</u> ";
      $message .= "<br><br><b>Cantidad de personas:</b> " . $cantidad_personas;
      $message .= "<br><br><b>Cantidad de niños:</b> " . $cantidad_niños;
      $message .= "<br><br><b>Edad promedio de los niños:</b> " . $edad_promedio_niños;
      $message .= "<br><br><b>Preferencia para el hotel:</b> " . $preferencia_hotel;
      $message .= "<br><br><b>¿Alquila equipo esqui?:</b> " . $alquiler_equipo;
      $message .= "<br><br><b>¿Toma clases de esqui o snowboard?:</b> " . $tomar_clases;
      $message .= "<br><br>";
      $message .= "<br><br><u>OBJETIVO DEL VIAJE</u>";
      $message .= "<br><br><b>Esquiar:</b> " . $objetivo_esquiar;
      $message .= "<br><br><b>Vida Nocturna:</b> " . $objetivo_vida_nocturna;
      $message .= "<br><br><b>Familia:</b> " . $objetivo_familia;
      $message .= "<br><br><b>Relax/Spa:</b> " . $objetivo_relax_spa;
      $message .= "<br><br><b>Shopping:</b> " . $objetivo_shopping;
      $message .= "<br><br><b>Otro:</b> " . $objetivo_otro;
      $message .= "<br><br>";
      $message .= "<br><br><b>Observaciones:</b> " . $observaciones;
      $message .= "<br><br>";
      $message .= "<br><br><u>DESCARGAR ARCHIVO ENCUESTAS</u>";

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
      $headers .= "From: Formulario Web <web@skirience.com>". "\r\n";
      $headers .= "Reply-To: ".$nombre." <".$email.">". "\r\n";


      // echo $name, $email, $lugar_inicio_viaje, $destino_aspen_colorado, $destino_laslenas_argentina, $destino_grandvalira_andorra, $destino_baqueria_españa, $destino_niseko_japon, $destino_otro, $fecha_aprox_inicio, $cantidad_dias, $fecha_desde, $fecha_hasta, $fechas_flexibles, $cantidad_personas, $cantidad_niños, $edad_promedio_niños, $preferencia_hotel, $alquiler_equipo, $tomar_clases, $objetivo_esquiar, $objetivo_familia, $objetivo_vida_nocturna, $objetivo_relax_spa, $objetivo_shopping, $objetivo_otro, $observaciones, $fecha; die();
  }
  // $error = mysqli_error($conexion_db);
  // echo $error;

  // Cierra conexión DB
  mysqli_close($conexion_db);

  //Envía Mail
  if( mail($to, $subject, $message, $headers) ) {
  	echo "1";
  } else {
  	echo "Error al enviar mensaje, intente nuevamente más tarde.";
  }

 ?>
