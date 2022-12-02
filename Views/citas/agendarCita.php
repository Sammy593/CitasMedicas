<?php
    $funcionUrl = funcionesBack("Citas");
    require_once($funcionUrl);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo(media())?>/css/dashboard.css">
    <link rel="stylesheet" href="<?php echo(media())?>/css/estilos_citas.css">
    <link rel="stylesheet" href="<?php echo(media())?>/plugins/fontawesome-free/css/all.css">
    <title>Citas</title>
</head>

<body>

<?php
    include_once('Views/template/aside.php');
?>
<!-- Espacio para colocar los formularios -->
<div class="subBody">
  <div class="subOptions">
    <div class="card">
        <div class="title"><span>Agendar cita</span></div>
        <div class="citasContainer">
        <p>Llene este formulario para agendar una cita</p>
    <form id="form_agregar" method = "post" enctype="multipart/form-data">
        <div>
            <label for="nombre">Paciente</label>
            <select name="paciente" id="selectPaciente" data-show-subtext="true" data-live-search="true">
              <option value="all">Todos</option>
              <?php if ($resultado_pacientes->num_rows > 0) { ?>
                  <?php while ($rowP = $resultado_pacientes->fetch_assoc()) { ?>
                      <option value="<?php echo $rowP['id'] ?>"><?php echo $rowP['nombres'] . " " . $rowP['apellidos']?></option>
                  <?php } ?>
              <?php } ?>
            </select>
        </div>
        
        <div>
            <label for="especialidad">Especialidad</label>
            <select name="especialidad" id="selectEspecialidad" data-show-subtext="true" data-live-search="true">
              <option value="all">Todos</option>
              <?php if ($resultado_especialidades->num_rows > 0) { ?>
                  <?php while ($rowE = $resultado_especialidades->fetch_assoc()) { ?>
                      <option value="<?php echo $rowE['id'] ?>"><?php echo $rowE['descripcion'] ?></option>
                  <?php } ?>
              <?php } ?>
            </select>
        </div>
        <div>
            <label for="nombre">Direccion</label>
            <input type="text" name="direccion" required>
        </div>
        <div>
            <label for="nombre">Telefono</label>
            <input type="text" name="telefono" required>
        </div>
        <div>
            <label for="nombre">Correo</label>
            <input type="text" name="correo" required>
        </div>
        <div>
            <input id="btn_agregar" type="submit" value="Agregar">
        </div>
        <a class="btn_cancelar" href="../index.php">Cancelar</a>
    </form>
        </div>
    </div>
  </div>
</div>
<!-- Fin del espacio para colocar los formularios -->

<!-- div que cierra la grilla -->
</div>

<?php
include_once('Views/template/scripts.php');
?>