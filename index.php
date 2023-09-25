<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "formulario"; 

$conn = new mysqli($servername, $username, $password, $dbname);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulario</title>
</head>
<body>
    
    <form action="#" name="servidor" method="POST">
        
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="correo" placeholder="correo">
        <input type="text" name="comentario" placeholder="comentario">

        <input type="submit" name="registro">
        <input type="reset">

    </form>

</body>

<?php

    if(isset($_POST['registro'])){

        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $comentarios = $_POST['comentario'];

        $sql = "INSERT INTO datos VALUES ('$nombre', '$correo', '$comentario')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}
}
$conn->close();
?>

</html>


