<?php
include_once 'Views/template/headHorario.php'; ?>

<?php include_once 'Views/template/aside.php'; ?>

<!-- Espacio para colocar los formularios -->
<div class="subBody">
  <div class="subOptions">
        <div class="centro">

        
        <div  class="tarjeta" >
        <!--  class="bg-white p-5 rounded-5 text-secondary shadow"  -->
    
    <!-- Titulo Prinpipal  -->
    <h1 style='text-align:center;'>HORARIOS </h1>
    <!-- Btn -->
    <br>
    <br>
    
    
     <!-- Btn Agregar -->
  <div >
             <!--Boton para Cerrar Seccion seccion -->
             <a class="fcc-btn"  href="addHorario"> 
                Agregar Horario</a>
                
    </div>

    <br>
    <br>
    
    
    
        <!-- Contenedor de la tabla -->
    <div  >
       
    <table >
        <thead>
            <tr>
                <th id="th1" >FECHA ATENCIÓN</th>
                <th id="th1">INICIO ATENCIÓN</th>
                <th id="th1">FIN ATENCIÓN</th>
                <th id="th1">ACCIÓN</th>
            </tr>
        </thead>
        <tbody>
            <?php //control sobre la consulta
                include_once 'conexion/conexion.php';


                //script para el boton eliminar 
                echo '<script>

                    function alerta(id){
                        var x = confirm("¿ Seguro de eliminar este Horario ?");
                        if(x == true){
                            alert("Eliminado correctamente");
                        }else{
                            return false;
                            header("location: horario");
                        }
                    }
                     
                    </script>';

                //construye la consulta
                $query =
                    'SELECT id,fechadatencion, inicioatencion, finatencion, activo FROM horario';
                $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td> ' . $row['fechadatencion'] . '</td>';
                    echo '<td> ' . $row['inicioatencion'] .'</td>';
                    echo '<td> ' . $row['finatencion'] . '</td>';
                    echo '<td> ' . $row['activo'] . '</td>';
                    echo '<td>';

                    //echo "<a role='button'   onclick='btnEliminar(" . $row['idusuario'] . ")'> Eliminar </a>";
                    echo("<a style=' background-color: #eec40b;
                    color: white;
                    padding: 5px 10px;
                    text-decoration: none;' onclick='return alerta();' href='deleteHorario/".$row['id']."'> Eliminar </a>");
                    echo '</div>';
                    echo '</td>';
                    echo '</tr>';
                }
                $result->free();
            } else {
                echo '<p><em>No Existen datos registrados </em></p> ';
            } ?>
        </tbody>
    </table>
    </div>
    </div>
  


        </div>
  </div>
</div>
<!-- Fin del espacio para colocar los formularios -->



<!-- div que cierra la grilla -->
</div>

<?php include_once 'Views/template/scripts.php';
?>
