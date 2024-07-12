<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ciudadanos</title>
  </head>
  <body>
    <div class="cointainer">
        <h1>Ciudadanos</h1>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>DPI</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Tel. Casa</th>
                    <th>Tel. Movil</th>
                    <th>Email</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Código de Nivel Academico</th>
                    <th>Código del Municipios</th>
                    <th>Contra</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datos as $ciudadano): //para recorrer 
                ?>
                <tr>
                    <th><?php echo $ciudadano ['dpi']?></th>
                    <th><?php echo $ciudadano ['apellido']?></th>
                    <th><?php echo $ciudadano ['nombre']?></th>
                    <th><?php echo $ciudadano ['direccion']?></th>
                    <th><?php echo $ciudadano ['tel_casa']?></th>
                    <th><?php echo $ciudadano ['tel_movil']?></th>
                    <th><?php echo $ciudadano ['email']?></th>
                    <th><?php echo $ciudadano ['fechanac']?></th>
                    <th><?php echo $ciudadano ['cod_nivel_acad']?></th>
                    <th><?php echo $ciudadano ['cod_muni']?></th>
                    <th><?php echo $ciudadano ['contra']?></th>
                    <th></th>
                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>

        </table>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>