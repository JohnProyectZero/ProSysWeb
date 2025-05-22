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
        <a href="index.php?c=proyectos&a=nuevo" class="btn btn-primary mb-3">Agregar Nuevo Proyecto</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre Proyecto</th>
                    <th>Descripción</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Cliente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data["proyectos"] as $dato) { ?>
                <tr>
                    <td><?php echo $dato["nombre"]; ?></td>
                    <td><?php echo $dato["descripcion"]; ?></td>
                    <td><?php echo $dato["fecha_inicio"]; ?></td>
                    <td><?php echo $dato["fecha_fin"]; ?></td>
                    <td><?php echo $dato["cliente"]; ?></td>
                    <td>
                        <a href="index.php?c=proyectos&a=modificar&id=<?php echo $dato["id_proyecto"]; ?>" class="btn btn-warning btn-sm">Modificar</a>
                        <a href="index.php?c=proyectos&a=eliminar&id=<?php echo $dato["id_proyecto"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este proyecto?');">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
