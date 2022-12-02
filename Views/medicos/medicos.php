<?php
include_once('Views/template/head.php');
?>

<?php
include_once('Views/template/aside.php');
?>

<!-- Espacio para colocar los formularios -->

<div class="subBody">
    <div class="topBar">
        <h2 class="title-view">Médicos</h2>
        <div class="auth">
            <div id="user-logged"></div>
            <img src="/Assets/img/imgLogin/LogotipoLogin.png" alt="img-user" id="user-img" class="card">
        </div>
        <div class="currentPeriod"></div>
    </div>
    <div class="subOptions">
        <form class="subTables">
            <label for="" class="title-form">Nuevo médico</label>
            <div class="section-block">
                <label for="">DNI</label>
                <input type="text" name="DNI" pattern="[\d]{10}" title="El DNI debe contener 10 números" required>
                <div class="text-danger error-DNI hidden"></div>
            </div>
            <div class="section-block">
                <label for="">Nombres</label>
                <input type="text" name="nombres" pattern="[a-zA-Z\s]{2,}" title="El nombre debe contener al menos dos letras" required>
                <div class="text-danger error-nombres hidden"></div>
            </div>
            <div class="section-block">
                <label for="">Apellidos</label>
                <input type="text" name="apellidos" pattern="[a-zA-Z\s]{2,}" title="El apellido debe contener al menos dos letras" required>
                <div class="text-danger error-apellidos hidden"></div>
            </div>
            <div class="section-block">
                <label for="">Dirección</label>
                <input type="text" name="direccion" required>
            </div>
            <div class="section-block">
                <label for="">Correo electrónico</label>
                <input type="email" name="correo" required>
            </div>
            <div class="section-block">
                <label for="">Teléfono</label>
                <input type="text" name="telefono" pattern="[\d]{10}" title="El teléfono debe contener 10 dígitos" required>
                <div class="text-danger error-telefono hidden"></div>
            </div>
            <div class="section-block">
                <label for="">Sexo</label>
                <select name="sexo" id="sexo">
                    <option value="">Seleccionar</option>
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
            </div>
            <div class="section-block">
                <label for="">Estado</label>
                <select name="estado" id="estado">
                    <option value="">Seleccionar</option>
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
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
                    <th scope="col">DNI</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <div class="update-modal hidden">
        <div class="exit-icon">X</div>
        <form class="subTables">
            <label for="" class="title-form">Modificar médico</label>
            <input type="hidden" name="id">
            <div class="section-block">
                <label for="">Cedula</label>
                <input type="text" name="dni" pattern="[\d]{10}" title="La cedula debe contener 10 números">
                <div class="text-danger error-dni hidden"></div>
            </div>
            <div class="section-block">
                <label for="">Nombre Completo</label>
                <input type="text" name="name" pattern="[a-zA-ZáéíóúÁÉÍÓÚ\s]{2,}" title="El nombre debe contener al menos dos letras">
                <div class="text-danger error-name hidden"></div>
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