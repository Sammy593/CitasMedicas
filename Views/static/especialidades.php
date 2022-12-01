<?php
include_once('../template/head.php');
?>

<?php
include_once('../template/aside.php');
?>

<!-- Espacio para colocar los formularios -->

<div class="subBody">
    <div class="topBar">
        <h2 class="title-view">Especialidades</h2>
        <div class="auth">
            <div id="user-logged"></div>
            <img src="/Assets/img/imgLogin/LogotipoLogin.png" alt="img-user" id="user-img" class="card">
        </div>
        <div class="currentPeriod"></div>
    </div>
    <div class="subOptions">
        <form>
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
        <form>
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

<!-- div que cierra la grilla -->
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="../js/teachers.js" type="module"></script>

<?php
include_once('../template/scripts.php');
?>