<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 
    <style>
    body {
        background-color: #f8f9fa;
    }
    .navbar {
        border-bottom: 3px solid #6c757d;
    }
    .card {
        border: 1px solid #6c757d;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
    }
    .table thead th {
        white-space: nowrap;
    }
    </style>
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
                    <a class="nav-link" href="ver_NivelesAcademicos">Niveles Académicos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ver_Ciudadanos">Ciudadanos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1>Ciudadanos</h1>

    <!-- Formulario de búsqueda -->
    <h3><i class="bi bi-search"></i> Barra de búsqueda</h3>
    <input class="form-control mb-3" id="searchInput" type="text" placeholder="Buscar...">

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>DPI</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono Casa</th>
                    <th>Teléfono Celular</th>
                    <th>Correo Electrónico</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Nivel Académico</th>
                    <th>Código de Municipio</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="Ciudadanos">
                <?php foreach($datos as $depto): ?>
                <tr>
                    <td><?php echo $depto['dpi']; ?></td>
                    <td><?php echo $depto['apellido']; ?></td>
                    <td><?php echo $depto['nombre']; ?></td>
                    <td><?php echo $depto['direccion']; ?></td>
                    <td><?php echo $depto['tel_casa']; ?></td>
                    <td><?php echo $depto['tel_movil']; ?></td>
                    <td><?php echo $depto['email']; ?></td>
                    <td><?php echo $depto['fechanac']; ?></td>
                    <td><?php echo $depto['cod_nivel_acad']; ?></td>
                    <td><?php echo $depto['cod_muni']; ?></td>
                    <td><?php echo $depto['contra']; ?></td>
                    <td>
                        <a href="editar_depto/<?php echo $depto['dpi']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                        <a href="eliminar_depto/<?php echo $depto['dpi']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        var searchValue = this.value.toLowerCase();
        var rows = document.querySelectorAll('#Ciudadanos tr');
        
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
