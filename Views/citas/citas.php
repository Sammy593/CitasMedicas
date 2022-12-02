<?php
include_once('Views/template/head.php');
?>

<?php
include_once('Views/template/aside.php');
?>

<!-- Espacio para colocar los formularios -->
<div class="subBody">
  <div class="subOptions">
  <div class="centro">
            <h2>Platos en menú</h2>
            
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del plato</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acción</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Control sobre la consulta
                    if ($result->num_rows > 0) {
                        // Recorre la matriz asociativa
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['id_plato'] . '</td>';
                            echo '<td>' . $row['nombre_Plato'] . '</td>';
                            echo '<td>' . $row['descripcion_Plato'] . '</td>';
                            echo '<td>' . $row['precio_Plato'] . '</td>';
                            echo '<td>';
                            // Para pasar parametro
                            echo '<a href="views/read.php?id=' . $row['id_plato'] . '"> Leer </a>';
                            echo '<a href="views/actualizar.php?id=' . $row['id_plato'] . '"> Actualizar </a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        $result->free();
                    } else {
                        echo '<p><em> No existe datos registardos </em></p>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
  </div>
</div>
<!-- Fin del espacio para colocar los formularios -->

<!-- div que cierra la grilla -->
</div>

<?php
include_once('Views/template/scripts.php');
?>