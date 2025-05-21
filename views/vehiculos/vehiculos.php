<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <style>
            *{
                padding: 10PX;
                margin: 10PX;
                align-content: center;
            }
        </style>
        <title></title>
    </head>
    <body>                                              	
        <a href="index.php?c=vehiculos&a=nuevo" class="btn btn-primary">Agregar</a>		
        <br>
        <br>
        <table border="1" width="80%" >
            <thead>
                <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Color</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>					
            <tbody>


                <?php
                foreach ($data["vehiculos"] as $dato) {
                    echo "<tr>";
                    echo "<td>" . $dato["placa"] . "</td>";
                    echo "<td>" . $dato["marca"] . "</td>";
                    echo "<td>" . $dato["modelo"] . "</td>";
                    echo "<td>" . $dato["anio"] . "</td>";
                    echo "<td>" . $dato["color"] . "</td>";
                    echo "<td><a href='index.php?c=vehiculos&a=modificar&id=" . $dato["id"] . "' class='btn btn-warning'>Modificar</a></td>";
                    echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=" . $dato["id"] . "' class='btn btn-danger'>Eliminar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>					
        </table>
    </body>
</html>
