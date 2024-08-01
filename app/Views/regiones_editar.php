<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="css/style.css">
  </head>
  <body class="bg-success p-2 text-dark bg-opacity-25">

  <body>
    
<div class="container card" style="width: 40rem;">
    <h1>Actualizar cod_region</h1>
    <form action="<?php echo base_url('actualizar_cod_region'); ?>" method="post">
        <input type="hidden" id="txtId" name="txtId" value="<?php echo $cod_region['cod_region']; ?>">
        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre:</label>
            <input type="text" id="txtNombre" name="txtNombre" class="form-control" value="<?php echo $cod_region['nombre']; ?>">
        </div>
        <div class="mb-3">
            <label for="txtdescripcion" class="form-label">descripcion:</label>
            <input type="text" id="txtdescripcion" name="txtdescripcion" class="form-control" value="<?php echo $cod_region['descripcion']; ?>">
            'cod_region', 'nombre', 'descripcion',
            <input type="submit" value="Actualizar" class="btn btn-primary">
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
