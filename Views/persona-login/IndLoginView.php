<?php
include_once('Views/template/head.php');
?>

<?php
$funcionUrl = funcionesBack("IndiceLogin");
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
    th {
        padding: 5px;
        font-size: 20px;
        background-color: rgba(5, 170, 170, 0.9);
    }

    td {
        padding: 5px;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: rgba(1, 1, 1, 0.2);
    }

    tr:hover {
        background-color: rgba(3, 3, 3, 0.4);
    }


    .boton {
        width: 150px;
        height: 40px;
        background-color: rgba(5, 170, 170, 0.8);
        margin-bottom: 10px;
    }

    a {
        text-decoration: none;
        color: black;
    }

    .opc {
        width: 70px;
        height: 30px;
        background-color: rgba(5, 170, 170, 0.8);
        margin-left: 2px;
        margin-right: 2px;
    }

    .link {
        color: blue;
    }
</style>

<div class="subBody">
    <div class="topBar">
        <h2 class="title-view">Usuarios registrados</h2>
        <div class="auth">
            <div id="user-logged"></div>
            <img src="<?php echo (media()) ?>/img/imgLogin/logotipoLogin.png" alt="img-user" id="user-img" class="card">
        </div>
        <div class="currentPeriod"></div>
    </div>

    <div class="subOptions">
        <button class="boton"><a href="AggLoginView" class="agregar"> Ingresar usuario </a> </button>
        <table class="table">
            <thead>
                <tr>
                    <th> Usuario </th>
                    <th> Contraseña </th>
                    <th> Persona </th>
                    <th> Rol </th>
                    <th> Acción </th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Control sobre la consulta
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        //Recorrer la matriz asociativa
                        echo ("<tr>");
                        echo ("<td> " . $row['usuario'] . "</td>");
                        echo ("<td> " . $row['contrasenia'] . "</td>");
                        echo ("<td> <a class='link' href=../personas/LecPersonasView/" . $row['persona_id'] . "> Click para ver </a></td>");
                        $queryrol = "SELECT * FROM Roles WHERE id=" . $row["rol_id"];
                        $resultado2 = $conn->query($queryrol);
                        $rol = $resultado2->fetch_assoc();
                        echo ("<td> " . $rol['descripcion'] . "</td>");
                        echo ("<td>");
                        echo ("<button class='opc'> <a onclick='return alerta();' href='EliLoginView/" . $row['id'] . "'> Eliminar </a> </button>");
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