<?php
    require_once 'conexion/conexion.php';
    //print_r($params);
    //Construcción de la consulta
$query = "SELECT ci.id, ci.paciente_id, pa.DNI AS 'dniP', ho.fechadatencion, pe.persona_id AS 'medico', p.DNI AS 'dniM', 
esp.descripcion AS 'especialidad', ci.estado
FROM pacientes AS pa, personas AS p, citas AS ci 
INNER JOIN horario AS ho ON ho.id = ci.horario_id
INNER JOIN personaespecialidades AS pe ON pe.persona_id = ho.medico_id
INNER JOIN especialidades AS esp ON esp.id = pe.especialidad_id
WHERE pa.id = ci.paciente_id AND p.id = pe.persona_id
";
$resultado = $conn->query($query);
?>