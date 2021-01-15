<?php

// echo json_encode($_REQUEST);

if($_POST['accion'] == 'crear'){
    require_once('../functions/connection.php');
    
    // validar entradas
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $empresa = filter_var($_POST['empresa'], FILTER_SANITIZE_STRING);
    $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);

    try{
        $stmt = $conn->prepare("INSERT INTO CONTACTO(NOMBRE, EMPRESA, TELEFONO) VALUES (?,?,?)");
        $stmt->bind_param("sss", $nombre, $empresa, $telefono);
        $stmt->execute();

        $respuesta = array(
            'respuesta' => 'correcto',
            'info' => $stmt->affected_rows,
            'datos' => array(
                'nombre' => $nombre,
                'empresa' => $empresa,
                'telefono' => $telefono,
                'idInsertado' => $stmt->insert_id
            )
        );

        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }
}
