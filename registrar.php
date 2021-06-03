
 <?php
 include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >=1 && strlen($_POST['telefono']) >=1 && strlen($_POST['correo']) >=1 && strlen($_POST['comentarios'])>=1){
        $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $correo = trim($_POST['correo']);
        $comentarios = trim($_POST['comentarios']);
        $consulta = "INSERT INTO datos(nombre, telefono, correo, comentarios) VALUES ('$nombre','$telefono','$correo','$comentarios')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="controls">¡Te has inscrito correctamente!</h3>
            <?php
        }else{
            ?>
            <h3 class="controls">¡Ha ocurido un error!</h3>
            <?php
        }
    }   else{
            ?>
            <h3 class="controls">¡Porfavor complete los campos!</h3>
            <?php
    }
}
 ?>