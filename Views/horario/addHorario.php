<?php
include_once 'Views/template/headHorario.php'; ?>

<?php include_once 'Views/template/aside.php'; ?>


<div class="subBody">
  <div class="subOptions">
        <div class="centro">
    <h2> Agregar un nuevo Horarios para las Citas  </h2>
    <p> Llene los campos solicitados</p>
        <form action="../Controllers/aghorario.php" method="post">
            <div>
                <label for="fechadatencion"> Fecha Atención </label>
                <input type="text" name="fechadatencion" required>
            </div>
            <div>
                <label for="inicioatencion"> Inicio Atención </label>
                <input type="text" name="inicioatencion" required>
            </div>
            <div>
                <label for="finatencion"> Fin Atención </label> 
                <input type="text" name="finatencion" required>
            </div>
            
            <div>
                <label for=""> Estado </label>
                <select name="activo">
                    <option value="true"> Activo </option>
                    <option value="false">Inactivo</option>
                </select>
            </div>
            <div>
                <input type="submit" value="Registrar Horario">
                <a href="horario"> Cancelar </a>
            </div>

        </form>
    </div>
   </div>
</div>


<?php include_once 'Views/template/scripts.php'; ?>

