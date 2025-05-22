<?php
session_start();
require_once "config/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $db = Conectar::conexion();
    // Preparar la consulta . deberiamos usar hashing)
    $stmt = $db->prepare("SELECT id_usuario, nombre, password FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($id_usuario, $nombre, $db_password);
    
    if ($stmt->fetch()) {
        if ($password == $db_password) {  // creo q debemnos usarpassword_verify()
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['nombre'] = $nombre;
            header("Location: index.php");
            exit();
        } else {
            $error = "Contraseña incorrecta";
        }
    } else {
        $error = "El usuario no existe";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form action="login.php" method="post">
        <p>Email:</p>
        <input type="email" name="email" id="email" required>
        <p>Contraseña:</p>
        <input type="password" name="password" id="password" required>
        <br><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>
