<?php 
include "../clases/Crud.php";
$crud = new Crud();

$datos = [
    "paterno" => $_POST["paterno"],
    "materno" => $_POST["materno"],
    "nombre" => $_POST["nombre"],
    "telefono" => $_POST["telefono"],
    "correo" => $_POST["correo"],
    "descripcion" => $_POST["descripcion"]
];

$datos_file = [
    "nombre" => $_FILES["foto"]["name"],
    "origen" => $_FILES["foto"]["tmp_name"],
    "destino" => "../public/upload/" . $_FILES["foto"]["name"],
];

$id_contacto = $crud->store($datos);

if ($id_contacto > 0) {

    // primero intenta mover el archivo
    if (move_uploaded_file($datos_file["origen"], $datos_file["destino"])) {

        // si se movió, guarda la ruta en BD
        if ($crud->store_path($id_contacto, $datos_file["nombre"], $datos_file["destino"])) {
            header("location:../index.php");
        } else {
            echo "Fallo al agregar la ruta";
        }

    } else {
        echo "Fallo al mover el archivo";
    }

} else {
    echo "Fallo al agregar";
}
?>