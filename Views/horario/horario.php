
<?php
include_once('Views/template/headHorario.php');
?>

<?php
include_once('Views/template/aside.php');
?>

<!-- Espacio para colocar los formularios -->

<div class="subBody">
    <div class="topBar">
        <h2 class="title-view">HORARIOS </h2>
        
        <div class="currentPeriod"></div>
    </div>
    <div class="subOptions">
        <form class="subTables"action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
            <label for="" class="title-form">Nuevo Horario</label>
            <div class="section-block">
                <label for="fechadatencion">Fecha Atención</label>
                <input type="text" name="fechadatencion"  required>
            </div>
            <div class="section-block">
                <label for="inicioatencion">Inicio Atención</label>
                <input type="text" name="inicioatencion"  required>
            </div>
            <div class="section-block">
                <label for="finatencion">Fin Atención</label>
                <input type="text" name="finatencion" required>
            </div>
            <div class="section-block">
                <label for="medico_id">Médico Identificación</label>
                <input type="text" name="medico_id" required>
            </div>
      
            <div class="section-block">
                <label for="">Estado</label>
                <select name="activo">
                    <option value="">Seleccionar</option>
                    <option value="true">Activo</option>
                    <option value="false">Inactivo</option>
                </select>
            </div>
           
            <div class="section-block">
                <input type="submit" value="Guardar">
            </div>
        </form>
        <!-- Contenedor de la tabla -->
       
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
   
                   //Agregar Datos 
                   include_once 'Controllers/aghorario.php'; 
   
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

<!-- Fin del espacio para colocar los formularios -->

<?php
include_once('Views/template/scripts.php');
?>