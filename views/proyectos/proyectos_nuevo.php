<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $data["titulo"]; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <style>
        form {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2><?php echo $data["titulo"]; ?></h2>
        <form action="index.php?c=proyectos&a=guarda" method="post" autocomplete="off">
            <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario']; ?>">
            <div class="mb-3">
                <label for="id_cliente" class="form-label">ID Cliente</label>
                <input type="text" class="form-control" id="id_cliente" name="id_cliente" required>
                <!-- Idealmente, se podría reemplazar por un select con la lista de clientes -->
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Proyecto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
            </div>
            <div class="mb-3">
                <label for="fecha_fin" class="form-label">Fecha Fin</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Proyecto</button>
        </form>
    </div>
</body>
</html>
