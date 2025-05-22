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
        <form action="index.php?c=proyectos&a=actualizar" method="post" autocomplete="off">
            <input type="hidden" name="id_proyecto" value="<?php echo $data["proyecto"]["id_proyecto"]; ?>">
            <div class="mb-3">
                <label for="id_usuario" class="form-label">ID Usuario</label>
                <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $data["proyecto"]["id_usuario"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="id_cliente" class="form-label">ID Cliente</label>
                <input type="text" class="form-control" id="id_cliente" name="id_cliente" value="<?php echo $data["proyecto"]["id_cliente"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Proyecto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data["proyecto"]["nombre"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"><?php echo $data["proyecto"]["descripcion"]; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="fecha_inicio" class="form-label">Fecha Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="<?php echo $data["proyecto"]["fecha_inicio"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="fecha_fin" class="form-label">Fecha Fin</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="<?php echo $data["proyecto"]["fecha_fin"]; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Proyecto</button>
        </form>
    </div>
</body>
</html>
