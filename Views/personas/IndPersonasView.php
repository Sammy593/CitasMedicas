<?php
$funcionUrl = funcionesBack("IndicePersonas");
require_once($funcionUrl);

echo '<script>

                    function alerta(id){
                        var x = confirm("¿ Seguro de eliminar este usuario ?");
                        if(x == true){
                            alert("Eliminado correctamente");
                        }else{
                            return false;
                            header("location: home.php");
                        }
                    }
                    
                    </script>';


?>

<?php
headPath();
?>

<?php
asidePath();
?>
<div class="subBody">
    <div class="topBar">
    <h2 class="titulo"> Personas registradas </h2>
    <h4> <a class="btn" href="AggPersonasView" class="agregar"> Ingresar persona </a></h4>
    </div>
    <div class="subOptions">
        <table class="table">
            <thead>
                <tr>
                    <th> DNI </th>
                    <th> Nombres </th>
                    <th> Dirección </th>
                    <th> Correo Electronico </th>
                    <th> Telefono</th>
                    <th> Sexo </th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Control sobre la consulta
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        //Recorrer la matriz asociativa
                        echo ("<tr>");
                        echo ("<td> " . $row['DNI'] . "</td>");
                        echo ("<td> " . $row['nombres'] . " " . $row['apellidos'] . "</td>");
                        echo ("<td> " . $row['direccion'] . "</td>");
                        echo ("<td> " . $row['correo'] . "</td>");
                        echo ("<td> " . $row['telefono'] . "</td>");
                        echo ("<td> " . $row['sexo'] . "</td>");
                        echo ("<td>");
                        echo ("<a class='btn' href='LecPersonasView/" . $row['id'] . "'> Leer </a>");
                        echo ("<a class='btn' href='ActPersonasView/" . $row['id'] . "'> Actualizar </a>");
                        echo ("<a onclick='return alerta();' class='btn' href='EliPersonasView/" . $row['id'] . "'> Eliminar </a>");
                        echo ("</td>");
                        echo ("</tr>");
                    }
                }

                ?>
            </tbody>

        </table>
    </div>
</div>
<?php
scriptsPath();
?>