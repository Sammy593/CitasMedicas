<?php
include_once('Views/template/head.php');
?>

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
asidePath();
?>
<style>
th{
    padding: 5px;
    font-size: 20px;
    background-color: rgba(5,170,170,0.9);
}
td{
    padding: 5px;
    text-align: center;
}

tr:nth-child(even){
    background-color: rgba(1,1,1,0.2);
}

tr:hover{
    background-color: rgba(3,3,3,0.4);
}


.boton{
    width:150px;
    height:40px;
    background-color:rgba(5,170,170,0.8);
    margin-bottom: 10px;
}

a{
    text-decoration: none;
    color:black;
}

.opc{
    width:70px;
    height:30px;
    background-color:rgba(5,170,170,0.8);
    margin-left: 2px;
    margin-right: 2px;
}


</style>

<div style="margin-top:200px;">
    <div class="subBody">
        <div class="topBar">
            <h2 class="title-view"> Personas registradas </h2> <br>
        </div>

        <div class="subOptions">
            <button class="boton"><a href="AggPersonasView" class="agregar"> Ingresar persona </a> </button>
            <table class="table">
                <thead>
                    <tr>
                        <th> DNI </th>
                        <th> Nombres </th>
                        <th> Dirección </th>
                        <th> Correo Electronico </th>
                        <th> Telefono</th>
                        <th> Sexo </th>
                        <th> Opciones </th>
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
                            echo ("<button class='opc'> <a  href='LecPersonasView/" . $row['id'] . "'> Leer </a> </button>");
                            echo ("<button class='opc'> <a href='ActPersonasView/" . $row['id'] . "'> Actualizar </a> </button>");
                            echo ("<button class='opc'> <a onclick='return alerta();' href='EliPersonasView/" . $row['id'] . "'> Eliminar </a> </button>");
                            echo ("</td>");
                            echo ("</tr>");
                        }
                    }

                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?php
scriptsPath();
?>