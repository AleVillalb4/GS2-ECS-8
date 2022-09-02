<?php

header('Content-Type: application/json');

require_once 'responses/nuevoResponse.php';
require_once 'request/nuevoRequest.php';
require_once '../../modelos/titular.php';
require_once '../../modelos/direccion.php';

$json = file_get_contents('php://input', true);
$req = json_decode($json);

$resp = new NuevoResponse();

$t = new Titular();
$t->NroDocumento = $req->Titular->NroDocumento;
$t->ApellidoNombre = $req->Titular->ApellidoNombre;


$dire = new Direccion();
$dire->Calle = $req->Titular->Direccion->Calle;
$t->Direccion = $dire;

$respuestaValidar = $t->ValidarDatos();

if ($respuestaValidar == null) {
    $resp->IsOk = True;
    $resp->Mensaje = 'Titular agregado correctamente';
} else {
    $resp->IsOk = False;
    $resp->Mensaje = $respuestaValidar;
}




echo json_encode($resp);
