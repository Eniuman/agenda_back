<?php
    include "header.php";
    include "clases/Crud.php";
    $crud = new Crud();
    $contacto = $crud->show($_GET["id"]);
?>
    <h1>Actualizar contacto</h1>
    <form action="servidor/update.php" method="post">
        <input type="text" name="id" 
        value="<?php echo $contacto['id']; ?>" 
        hidden>

        <label for="paterno">Apellido paterno</label>
        <input type="text" name="paterno" id="paterno" 
        value="<?php echo $contacto['paterno']; ?>">

        <label for="materno">Apellido Materno</label>
        <input type="text" name="materno" id="materno"
        value="<?php echo $contacto['materno']; ?>">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"
        value="<?php echo $contacto['nombre']; ?>">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="telefono"
        value="<?php echo $contacto['telefono']; ?>">
        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo"
        value="<?php echo $contacto['correo']; ?>">
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion"
        value="<?php echo $contacto['descripcion']; ?>">
        <label for="">Agrega una foto</label>
        <input type="file" name="imagen" id="foto">
        
        <button>Actualizar</button>
    </form>

<?php 
    include "footer.php";
?>