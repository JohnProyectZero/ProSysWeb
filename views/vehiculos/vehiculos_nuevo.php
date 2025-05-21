<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <title>titulo</title>
        <style>
            *{
                height: auto;
                width: auto;
                padding: 0;
                margin: 0;
                align-content: center;
            }
            form{
                width: 300px;
                padding: 20px;
                background-color: #f3f3f3;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>	
    <body>
        <div class="container">
            <h2><?php echo $data["titulo"]; ?></h2>

            <!--El atributo autocomplete="off" en HTML se usa en formularios o campos de entrada (<input>) 
            para desactivar la función de autocompletado del navegador. Cuando se establece este atributo 
            en un campo de formulario, el navegador no sugiere valores almacenados previamente para ese 
            campo específico.   -->

            <form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=guarda" autocomplete="off">
                <div class="form-group">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" />
                </div>

                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" />
                </div>

                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" />
                </div>

                <div class="form-group">
                    <label for="anio">Año</label>
                    <input type="text" class="form-control" id="anio" name="anio" />
                </div>

                <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" class="form-control" id="color" name="color" />
                </div>

                <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>

            </form>
        </div>
    </body>
</html>
