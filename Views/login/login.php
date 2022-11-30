<?php
$funcionUrl = funcionesBack('login');
require_once $funcionUrl;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Autor: Jhostyn Javier Gavilanez Suarez-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <!--Link de Boostrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <!--Librerias de javascript -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body class="bg-info d-flex justify-content-center align-items-center vh-100">
    <!--Contnedor de tarjeta -->
    <div
      class="bg-white p-5 rounded-5 text-secondary shadow"
      style="width: 50rem"
    >
    <div >
      <h1>AGENDAMIENTO DE CITAS MÉDICAS</h1>
    </div>
      <!--Contnedor que separa  -->
      <div class="container text-center">
        <!--Contnedor de division de dos columnas -->
        <div class="row justify-content-around">
          <!--PRIMERA COLUMNA -->
          <div class="col-4">
            <!--Imagen del icono del Agendamiento de Citas -->
            <div class="d-flex justify-content-center">
              <img
                src="<?php echo media(); ?>/img/imgLogin/LogotipoLogin.png"
                alt="Perfil_Usuario"
                style="height: 20rem"
              />
              <!--fin imagen -->
            </div>
            <!--fin comlumna uno -->
          </div>
          <!--SEGUNDA COLUMNA -->
          <div class="col-6">
            
<div>
  <!--Imagen del icono del login -->
  <div class="d-flex justify-content-center">
    <img
      src="<?php echo media(); ?>/img/imgLogin/Perfil_Usuario.png"
      alt="Perfil_Usuario"
      style="height: 7rem"
    />
  </div>
  <!--Div y Formulario -->
  <div>
    <form action="Controllers/Login.php" method="post" >
      <table>
        <tr>
          <!--titulo -->
          <div class="text-center fs-1 fw-bold">LOGIN</div>
        </tr>
        <tr>
          <!--icono del username -->
          <div class="input-group mt-4">
            <div class="input-group-text bg-info">
              <img
                src="<?php echo media(); ?>/img/imgLogin/username-icon.svg"
                alt="username-icon"
                style="height: 1rem"
              />
            </div>
            <!--caja del username-->
            <input
              class="form-control bg-light"
              type="text"
              name="usuario"
              placeholder="Username"
              required
            />
          </div>
        </tr>
        <tr>
          <!--icono de la contraseña -->
          <div class="input-group mt-1">
            <div class="input-group-text bg-info">
              <img
                src="<?php echo media(); ?>/img/imgLogin/password-icon.svg"
                alt="password-icon"
                style="height: 1rem"
              />
            </div>
            <!--caja de la contraseña -->
            <input
              class="form-control bg-light"
              
              type="password"
              name="contrasenia"
              placeholder="Password"
              required
            />
          </div>
        </tr>
        <tr>
          <div class="d-flex justify-content-around mt-1"></div>
          <div>
              <!--Boton para iniciar seccion -->
            <button
              type="summit"
              class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm "
            
            >
              Iniciar Sesión
            </button>

             
          </div>
        </tr>
      </table>
    </form>
  </div>
</div>
            <!--fin comlumna dos -->
          </div>
          <!--fin dos columnas -->
        </div>
        <!--fin contenedor que divide las columnas -->
      </div>

      <!--fin Contnedor de tarjeta -->
    </div>
  </body>
  
</html>
