<?php 
    include "header.php";
    include "clases/Crud.php";
    $crud = new Crud();
    $contactos = $crud->show_all();
?>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Lista de contactos</h1>
    <p>
        <a href="create.php" class="btn btn-primary">Crear nuevo contacto</a>
    </p>
    <table class="table table-striped">
        <thead>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Descripcion</th>
            <th class="text-center">Foto</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <?php
                foreach($contactos as $contacto): 
                    $id = $contacto["id"];
            ?>
            <tr>
                <td><?php echo $contacto["paterno"] ?></td>
                <td><?php echo $contacto["materno"] ?></td>
                <td><?php echo $contacto["nombre"] ?></td>
                <td><?php echo $contacto["telefono"] ?></td>
                <td><?php echo $contacto["correo"] ?></td>
                <td><?php echo $contacto["descripcion"] ?></td>
                <td class="text-center">
                    <img src="<?php echo "public/upload/".$contacto["foto"] ?>" 
                    alt="" width="20%">
                </td>
                <td>
                    <a class="btn btn-warning" href="edit.php?id=<?php echo $id; ?>">
                        Editar
                    </a>
                </td>
                <td>
                    <a class="btn btn-danger" href="servidor/destroy.php?id=<?php echo $id; ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>


<?php 
    include "footer.php";
?>