<?php
// $saveToCSV = pathfile
$saveToCSV = false
if ($saveToCSV !== false){
// Save to CSV file
      $file = fopen($saveToCSV, "w");
      fputcsv($file, array('ID','Nombre','Email','Lugar de inicio','CHAPELCO','ASPEN','LAS LEÑAS','GRANDVALIRA','BAQUERIA','NISEKO','SIERRA NEVADA','OTRO DESTINO','Fecha desde','Fechas hasta','Fechas flexibles','Cantidad de personas','Cantidad de niños','Edad promedio de niños','Prefencia hotel','Alquiler equipos','Tomar clases','ESQUIAR','FAMILIA','VIDA NOCTURNA','RELAX/SPA','SHOPPING','OTRO OBJETIVO','Observaciones','Fecha envio formulario'),';');
      $tabla_db = "formulario";
      $query = "SELECT * FROM $tabla_db ORDER BY `id` ASC";
      $result_query = mysqli_query($conexion_db, $query);
      while($fila = mysqli_fetch_array($result_query,MYSQLI_ASSOC))
      {
          fputcsv($file, $fila);
      }
      fclose($file);
      $URL_DESCARGA = $saveToCSV.'/encuestas.csv';
}
