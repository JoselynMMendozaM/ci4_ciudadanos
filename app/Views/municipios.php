<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Municipios</title>
  </head>
  <body>
    <div class="cointainer">
        <h1>Municipios</h1>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Código de los Departamentos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datos as $muni): //para recorrer 
                ?>
                <tr>
                    <th><?php echo $muni ['cod_muni']?></th>
                    <th><?php echo $muni ['nombre_municipio']?></th>
                    <th><?php echo $muni ['cod_depto']?></th>
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