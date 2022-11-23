<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Citas</title>
</head>
<body>
    <div class="topBar">
        <h2 class="title-view">Citas</h2>
        <div class="auth">
            <div id="user-logged"></div>
            <img src="assets/logo-usuario.png" alt="img-user" id ="user-img" class="card" >
        </div>
        <div class="currentPeriod"></div>
    </div>
    <div class="options">
        <form>
            <label for="" class="title-form">Nueva aula</label>
            <div class="section-block">
                <label for="level">Nivel</label>
                <select name="level" id="level">
                    <option value="">Seleccionar nivel</option>
                    <option value="Inicial I">Inicial I</option>
                    <option value="Inicial II">Inicial II</option>
                    <option value="Primero">Primero</option>
                    <option value="Segundo">Segundo</option>
                </select>
                <div class="text-danger error-level hidden"></div>
            </div>
            <div class="section-block">
                <label for="parallel">Paralelo</label>
                <select name="parallel" id="parallel">
                    <option value="">Seleccionar paralelo</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
                <div class="text-danger error-parallel hidden"></div>
            </div>
            <div class="section-block">
                <label for="teacher">Docente</label>
                <select name="teacher" id="teacher"></select>
                <div class="text-danger error-teacher hidden"></div>
            </div>
            <div class="section-block">
                <label for="total-quotas">Cupos</label>
                <select name="totalQuotas" id="totalQuotas"></select>
                <div class="text-danger error-quotas hidden"></div>
            </div>
            <div class="section-block">
                <input type="submit" value="Guardar">
            </div>
        </form>
        <table class="table table-striped">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Paralelo</th>
                    <th scope="col">Docente</th>
                    <th scope="col">Cupos</th>
                    <th scope="col">Disponibles</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    <div class="update-modal hidden">
        <form>
            <label for="" class="title-form">Nueva aula</label>
            <div class="exit-icon">X</div>
            <input type="hidden" name="id_update">
            <input type="hidden" name="actual_quota">
            <div class="section-block">
                <label for="">Nivel</label>
                <select name="level_update">
                    <option value="">Seleccionar nivel</option>
                    <option value="Inicial I">Inicial I</option>
                    <option value="Inicial II">Inicial II</option>
                    <option value="Primero">Primero</option>
                    <option value="Segundo">Segundo</option>
                </select>
                <div class="text-danger error-update-level hidden"></div>
            </div>
            <div class="section-block">
                <label for="">Paralelo</label>
                <select name="parallel_update">
                    <option value="">Seleccionar paralelo</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
                <div class="text-danger error-update-parallel hidden"></div>
            </div>
            <div class="section-block">
                <label for="">Docente</label>
                <select name="teacher_update"></select>
                <div class="text-danger error-update-teacher hidden"></div>
            </div>
            <div class="section-block">
                <label for="">Cupos</label>
                <select name="totalQuotas_update"></select>
                <div class="text-danger error-update-quotas hidden"></div>
            </div>
            <div class="section-block">
                <input type="submit" value="Guardar">
            </div>
        </form>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="js/citas.js" type="module"></script>
</body>
</html>