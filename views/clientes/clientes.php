<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $data["titulo"]; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2><?php echo $data["titulo"]; ?></h2>
        <a href="index.php?c=clientes&a=nuevo" class="btn btn-primary mb-3">Agregar Nuevo Cliente</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre Empresa</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>País</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data["clientes"] as $dato) { ?>
                <tr>
                    <td><?php echo $dato["nombre_empresa"]; ?></td>
                    <td><?php echo $dato["direccion"]; ?></td>
                    <td><?php echo $dato["ciudad"]; ?></td>
                    <td><?php echo $dato["pais"]; ?></td>
                    <td><?php echo $dato["telefono"]; ?></td>
                    <td>
                        
                        <a href="index.php?c=clientes&a=modificar&id=<?php echo $dato["id_cliente"]; ?>" class="btn btn-warning btn-sm">Modificar</a>
                        <a href="index.php?c=clientes&a=eliminar&id=<?php echo $dato["id_cliente"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este cliente?');">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
