<?php
    require_once('../conexion/conexion.php');
    //Verificar si los datos fueron enviados por el metodo post
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       //VERIFICAR QUE EXISTAN DATOS EN LA VARIABLE enviadas 
        if(isset($_POST['nombre']) && isset($_POST['apellido'])
        && isset($_POST['nombreUsu']) && isset($_POST['contrasenia'])
         && isset($_POST['cedula']) && isset($_POST['telefono'])&& isset($_POST['correo'])){
            //Construir la consulta
            $query = "INSERT INTO login(nombreUsuario, apellidoUsuario,nombreUsuaLog,
            passwordLog,cedulaUsuario, telefonoUsuario, correoUsuario)
            VALUES (?,?,?,?,?,?,?)";
            //Preparar la consulta
            if($stmt = $conn-> prepare($query)){
                $stmt -> bind_param("sssssss", $_POST['nombre'], $_POST['apellido'],
                $_POST['nombreUsu'], $_POST['contrasenia'], $_POST['cedula'],
                 $_POST['telefono'],$_POST['correo']);

                 //Ejecutar statemet
                 if($stmt -> execute()){
                    header("location: index.html");
                    exit();
                 }else{
                    echo "Error, el statemet no se ejecutó";
                 }
                 $stmt -> close();
            }else{
                echo "Error en la preparacion del statement";
            }
        }else{
            echo "No se estan llenando todos los datos";
        }
        $conn -> close();
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>

       <!--Link de Boostrap -->
       <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
     <!--Librerias de javascript -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body class="bg-info d-flex justify-content-center align-items-center vh-100">

    <!--Contnedor de tarjeta -->
    <div
      class="bg-white p-5 rounded-5 text-secondary shadow"
      style="width: 50rem"
    >
    <!--Titulo -->
    <div>
    <div class="text-center fs-1 fw-bold">REGISTRO USUARIOS</div>
      <div class="text-center fw-bold p-2">COMPLETE EL FORMULARIO PARA ESTABLECER UN NUEVO USUARIO</div>
    </div>
      <!--Contnedor que separa  -->
      <div class="container text-center">
        <!--Contnedor de division de dos columnas -->
        <div class="row justify-content-around">
          <!--PRIMERA COLUMNA -->
          <div class="col-3">
                <!--Imagen del icono del Agendamiento de Citas -->
                <div class="d-flex justify-content-center">
                <img
                    src="./Images/NuevoUsuario.png"
                    alt="Perfil_Usuario"
                    style="height: 18rem"
                 />
                 <!--fin imagen -->
                </div>
             <!--fin comlumna uno -->
          </div>
            <!--SEGUNDA  COLUMNA -->
          <div class="col-7">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
           <!--1 DIV - NOMBRE-->
        <div>
            <div class="mb-3 row">
                 <label for="inputNombre" class="col-sm-3 col-form-label fw-bold ">Nombre: </label>
                <div class="col-sm-9">
                 <input class="form-control bg-light"
                    type="text"
                    name="nombre"
                    placeholder="NOMBRE"
                    required
                    class="form-control" 
                    id="inputNombre">
                </div>
            </div>
            
        </div>

        <!--2 DIV - APELLIDO-->
        <div>
            <div class="mb-3 row">
                 <label for="inputApellido" class="col-sm-3 col-form-label fw-bold ">Apellido: </label>
                <div class="col-sm-9">
                 <input class="form-control bg-light"
                    type="text"
                    name="apellido"
                    placeholder="APELLIDO"
                    required
                    class="form-control" 
                    id="inputApellido">
                </div>
            </div>

        </div>

        <!--3 DIV - NOMBRE USUARIO-->
        <div>
             <div class="mb-3 row">
                 <label for="inputNombreUsua" class="col-sm-3 col-form-label fw-bold ">Usuario: </label>
                <div class="col-sm-9">
                 <input class="form-control bg-light"
                    type="text"
                    name="nombreUsu"
                    placeholder="NOMBRE DEL USUARIO"
                    required
                    class="form-control" 
                    id="inputNombreUsua">
                </div>
            </div>
        </div>

        <!--4 DIV - CONTRASEÑA-->
        <div>
            <div class="mb-3 row">
                 <label for="inputContrasenia" class="col-sm-3 col-form-label fw-bold ">Contraseña: </label>
                <div class="col-sm-9">
                 <input class="form-control bg-light"
                    type="text"
                    name="contrasenia"
                    placeholder="CONTRASEÑA"
                    required
                    class="form-control" 
                    id="inputContrasenia">
                </div>
            </div>
        </div>

        <!--5 DIV - CEDULA-->
        <div>
            <div class="mb-3 row">
                 <label for="inputCedula" class="col-sm-3 col-form-label fw-bold ">Cédula: </label>
                <div class="col-sm-9">
                 <input class="form-control bg-light"
                    type="text"
                    name="cedula"
                    placeholder="CEDULA "
                    required
                    class="form-control" 
                    id="inputCedula">
                </div>
            </div>
        </div>


        <!--6 DIV -TELEFONO -->
        <div>
            <div class="mb-3 row">
                 <label for="inputTelefono" class="col-sm-3 col-form-label fw-bold ">Teléfono: </label>
                <div class="col-sm-9">
                 <input class="form-control bg-light"
                    type="text"
                    name="telefono"
                    placeholder="TELEFONO "
                    required
                    class="form-control" 
                    id="inputTelefono">
                </div>
            </div>
        </div>

        <!--7 DIV - CORREO -->
        <div>
        <div class="mb-3 row">
                 <label for="inputCorreo" class="col-sm-3 col-form-label fw-bold ">Email: </label>
                <div class="col-sm-9">
                 <input class="form-control bg-light"
                    type="text"
                    name="correo"
                    placeholder="EMAIL "
                    required
                    class="form-control" 
                    id="inputCorreo">
                </div>
            </div>
        </div>

         <!--BOTONES  -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
             <!--8 DIV - BOTON ENVIO -->
            <input class="btn btn-outline-success " type="submit" value="AGREGAR" >

            <!--9 DIV - BOTON CANCELAR-->
            <a class="btn btn-outline-danger"  href="index.html" role="button" >CANCELAR</a>
                
        </div>
    </form>
          
          <!--fin comlumna Dos -->
          </div>




          </div>










    </<div>
        
   
    <!--ESTO ES LA LIBRERIA DE JAVASCRIPT DE BOOSTRAP Y CODIGO -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <script src="../Javascript/alertLogin.js"></script>
    

    
</body>




</html>

