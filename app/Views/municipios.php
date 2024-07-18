<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas Municipios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href='ver_Ciudadanos'>Ciudadanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='ver_departamentos'>Departamentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='ver_regiones'>Regiones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='ver_municipio'>municipios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='ver_NivelesAcademicos'>Niveles academicos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <div class="container">
        <h1>Municipios</h1>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>codigo de departamento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datos as $depto):
                ?>
                <tr>
                    <td> <?php echo $depto['cod_muni']  ?> </td>
                    <td> <?php echo $depto['nombre_municipio']      ?> </td>
                    <td> <?php echo $depto['cod_depto'] ?> </td>
                    <td></td>
                </tr>
                    <?php
                    endforeach;
                    ?>
            </tbody>
        </table>


    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIqktqLr7X5HH10g+DhR47G5GoLljVAKBVAHZiDE/D7F5vhYBR9" crossorigin="anonymous"></script>
</body>
</html>