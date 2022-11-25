<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo media(); ?>/css/estilos_dashboard.css">
    <title>C-Panel</title>
</head>
<body>
    <div class="container">
        <div class="options">
            <h2 class="bar-title" data-id="index">Consultorio</h2>
            <!-- Menu -->
            <ul>
                <li data-id="doctors">Doctores</li>
                <li data-id="speciality">Especialidades</li>
                <li data-id="asistance">Asistentes</li>
                <li data-id="patient">Pacientes</li>
                <li data-id="cite">Citas</li>
                <li data-id="close">Salir</li>
            </ul>
        </div>
        <iframe src="Views/dashboard/inicio.php" frameborder="0" class="views"></iframe>
    </div>
    
    <script>

        let body = document.querySelector("body")
        let view = document.querySelector("iframe")
        body.addEventListener("click", (e) => {
            let id = e.target.dataset.id
            switch (id) {
                case "index":
                    view.src = "Views/dashboard/inicio.php"
                    break;
                case "doctors":
                    view.src = "Views/dashboard/doctores.php"
                    break;
                case "speciality":
                    view.src = "Views/dashboard/especialidades.php"
                    break;
                case "asistance":
                    view.src = "Views/dashboard/asistentes.php"
                    break;
                case "patient":
                    view.src = "Views/dashboard/pacientes.php"
                    break;
                case "cite":
                    view.src = "Views/dashboard/citas.php"
                    break;
                case "close":
                    alert("Salimos del sistema")
                    break;
                default:
                    ""
            }
        }) 

    </script>
</body>
</html>
