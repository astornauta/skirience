<?php

require_once("../mail/open_conexion.php");
$conexion_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = "SELECT * FROM formulario;";
$sth = $conexion_db->prepare($query);
$sth->execute();
$records = $sth->fetchAll();
if(count($records)){

    $file = fopen('php://output', 'w');
    //add BOM to fix UTF-8 in Excel
    fputs($file, $bom =( chr(0xEF) . chr(0xBB) . chr(0xBF) ));

    $keys = array_keys($records[0]);
    foreach($keys as &$k){
        $k = str_replace("_", " ", $k);
    }

    fputcsv($file, $keys, ";");
    foreach($records as $r){
        fputcsv($file, $r, ";");
    }

    header('Content-Description: Descarga de archivo');
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="formularios.csv"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    readfile('php://output');
}

