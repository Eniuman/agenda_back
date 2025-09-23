
<?php 
    include "../clases/Crud.php";
    $crud = new Crud();
    //sirve para ver que contiene un objeto
    $id = $_POST["id"];
    $datos = [
        "paterno" => $_POST["paterno"],
        "materno" => $_POST["materno"],
        "nombre" => $_POST["nombre"],
        "telefono" => $_POST["telefono"],
        "correo" => $_POST["correo"],
        "descripcion" => $_POST["descripcion"]
    ];


    if ($crud->update($id,$datos)) {
        header("location:../index.php");
    } else {
        echo "Fallo al agregar";
    } 
?>