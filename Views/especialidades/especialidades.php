<?php
include_once('Views/template/head.php');
?>

<?php
include_once('Views/template/aside.php');
?>

<!-- Espacio para colocar los formularios -->

<div class="subBody">
    <div class="topBar">
        <h2 class="title-view">Especialidades</h2>
        <div class="auth">
            <div id="user-logged"></div>
            <img src="<?php echo(media())?>/img/imgLogin/logotipoLogin.png" alt="img-user" id="user-img" class="card">
        </div>
        <div class="currentPeriod"></div>
    </div>
    <div class="subOptions">
        <form class="subTables">
            <label for="" class="title-form">Nueva especialidad</label>
            <div class="section-block">
                <label for="">Descripción</label>
                <input type="text" name="cedula" pattern="[\d]{10}" title="La cedula debe contener 10 números">
                <div class="text-danger error-cedula hidden"></div>
            </div>
            <div class="section-block">
                <label for="parallel">Activo</label>
                <select name="parallel" id="parallel">
                    <option value="">Seleccionar</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="section-block">
                <input type="submit" value="Guardar">
            </div>
        </form>
        <table class="table table-striped">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Activo</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <div class="update-modal hidden">
        <div class="exit-icon">X</div>
        <form class="subTables">
            <label for="" class="title-form">Modificar especialidad</label>
            <input type="hidden" name="id">
            <div class="section-block">
                <label for="">Descripción</label>
                <input type="text" name="descripcion">
            </div>
            <div class="section-block">
                <label for="">Activo</label>
                <input type="text" name="activo">
            </div>
            <div class="section-block">
                <input type="submit" value="Guardar">
            </div>
        </form>
    </div>

</div>

<!-- Fin del espacio para colocar los formularios -->

<?php
include_once('Views/template/scripts.php');
?>