<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas Municipios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 

</head>
<body class="bg-info p-2 text-dark bg-opacity-10">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href='menu'>Menú Principal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="ver_regiones">Regiones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ver_departamentos">Departamentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ver_municipio">Municipios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ver_NivelesAcademicos">Niveles Academicos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ver_Ciudadanos">Ciudadanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container">
        <h1>Municipios</h1>


<!-- Formulario de búsqueda -->
<h3><i class="bi bi-search"></i>barra de busqueda</h3>
    <input class="form-control mb-3" id="searchInput" type="text" placeholder="Buscar...">
    

        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>codigo de departamento</th>
                </tr>
            </thead>
            <tbody id="municipios">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIqktqLr7X5HH10g+DhR47G5GoLljVAKBVAHZiDE/D7F5vhYBR9" crossorigin="anonymous"></script>
    <script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        var searchValue = this.value.toLowerCase();
        var rows = document.querySelectorAll('#municipios tr');
        
        rows.forEach(function(row) {
            var cells = row.querySelectorAll('td');
            var match = false;
            
            cells.forEach(function(cell) {
                if (cell.textContent.toLowerCase().includes(searchValue)) {
                    match = true;
                }
            });
            
            if (match) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>

  </body>
</html>