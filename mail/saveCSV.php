<?php
// $saveToCSV = pathfile
if ($saveToCSV !== false){
// Save to CSV file

if (isset($_POST["formulario"])) {
// Prepara conexión DB
      include("open_connexion.php");

      $file = fopen($saveToCSV, "w");
      fputcsv($file, array('ID','Nombre','Email','Lugar de inicio','CHAPELCO','SAN MARTIN','ASPEN','SANKT','VAIL','BAQUERIA','NISEKO','OTRO DESTINO','Fecha aproximada de inicio','Cantidad de dias','Fecha desde','Fechas hasta','Fechas flexibles','Cantidad de personas','Cantidad de niños','Edad promedio de niños','Prefencia hotel','Alquiler equipos','Tomar clases','ESQUIAR','FAMILIA','VIDA NOCTURNA','RELAX/SPA','SHOPPING','OTRO OBJETIVO','Observaciones','Fecha envio formulario'),';');
      $tabla_db = "formulario";
      $query = "SELECT * FROM $tabla_db ORDER BY `id` ASC";
      $result_query = mysqli_query($conexion_db, $query);
      while($fila = mysqli_fetch_array($result_query,MYSQLI_ASSOC))
      {
          fputcsv($file, $fila);
      }
      fclose($file);
      include("close_connexion.php");
}
}
