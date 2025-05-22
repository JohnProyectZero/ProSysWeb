<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $data["titulo"]; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <style>
        form {
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2><?php echo $data["titulo"]; ?></h2>
        <form action="index.php?c=clientes&a=actualizar" method="post" autocomplete="off">
            <input type="hidden" name="id_cliente" value="<?php echo $data["cliente"]["id_cliente"]; ?>">
            <div class="mb-3">
                <label for="nombre_empresa" class="form-label">Nombre Empresa</label>
                <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" value="<?php echo $data["cliente"]["nombre_empresa"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $data["cliente"]["direccion"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $data["cliente"]["ciudad"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="pais" class="form-label">País</label>
                <input type="text" class="form-control" id="pais" name="pais" value="<?php echo $data["cliente"]["pais"]; ?>" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $data["cliente"]["telefono"]; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
