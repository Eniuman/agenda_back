<?php
    include "header.php";
?>

   <div class="container">
    <div class="row">
        <div class="col">
             <h1>Crear nuevo contacto</h1>
            <form action="servidor/store.php" method="post" 
            enctype="multipart/form-data">
                <label for="paterno">Apellido paterno</label>
                <input type="text" name="paterno" id="paterno" class="form-control">
                <label for="materno">Apellido Materno</label>
                <input type="text" name="materno" id="materno" class="form-control">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" id="telefono" class="form-control">
                <label for="correo">Correo</label>
                <input type="text" name="correo" id="correo" class="form-control">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
                <label for="">Agrega una foto</label>
                <input type="file" name="foto" id="foto" class="form-control">
                <button class="btn btn-primary mt-3">Enviar</button>
                <a href="index.php" class="btn btn-secondary mt-3">Cancelar</a>
            </form>
        </div>
    </div>
   </div>

<?php 
    include "footer.php";
?>