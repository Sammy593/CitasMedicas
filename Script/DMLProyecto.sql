
-- SETENCIA DML 
USE ProyectoCitasMedicas;

-- *******************************************
-- DML PERSONA
-- *******************************************
insert into Personas (DNI, nombres,apellidos,direccion,correo,telefono,sexo,estado ) 
values ('123456478', 'ROSA','RONQUILLO','QUITO','ROSA123@gmail.com','098563241','F','1'); 
insert into Personas (DNI, nombres,apellidos,direccion,correo,telefono,sexo,estado ) 
values ('142563254', 'ANDREA','REA','SALINAS','ANDREASSS@gmail.com','0956325425','F','1'); 
insert into Personas (DNI, nombres,apellidos,direccion,correo,telefono,sexo,estado ) 
values ('1231231521', 'ANDRES','ROCA','DURAN','ANRCA@gmail.com','0985424242','M','1'); 

select * from personas;

-- *******************************************
-- DML PERSONA LOGIN 
-- *******************************************
insert into PersonaLogin (usuario, contrasenia,persona_id,rol_id ) values ('Usuario1', 'Usuario1','1','1'); 
insert into PersonaLogin (usuario, contrasenia,persona_id,rol_id ) values ('Usuario2', 'Usuario1','2','2'); 
insert into PersonaLogin (usuario, contrasenia,persona_id,rol_id ) values ('ADMIN', 'ADMIN','3','3'); 


select * from PersonaLogin;


-- *******************************************
-- DML DE ROLES
-- *******************************************
-- usuario para secretaria
insert into Roles (id, descripcion,estado ) values ('1','SECRETARIA ONE', '1'); 
insert into Roles (id, descripcion,estado ) values ('2','SECRETARIA TWO', '1'); 

-- usuario para admin
insert into Roles (id, descripcion,estado ) values ('3','ADMIN', '1'); 


select * from Roles;


-- *******************************************
-- DML ESPECIALIDADES
-- *******************************************
insert into Especialidades (id, descripcion,activo ) values ('1','REVISION', '1'); 
insert into Especialidades (id, descripcion,activo ) values ('2','CIRUGIA', '1'); 
insert into Especialidades (id, descripcion,activo ) values ('3','EXAMENES', '1'); 

select * from Especialidades;



-- *******************************************
-- DML PERSONA ESPECIALIDADES
-- *******************************************
insert into PersonaEspecialidades (persona_id, especialidad_id) values ('1', '1'); 
insert into PersonaEspecialidades (persona_id, especialidad_id) values ('2', '2'); 

select * from PersonaEspecialidades;


-- *******************************************
-- DML HORARIO 
-- *******************************************
insert into Horario (fechadatencion, inicioatencion,finatencion,activo,medico_id) 
values ('2020-03-25', '13:30:00','14:30:00','1','1'); 
insert into Horario (fechadatencion, inicioatencion,finatencion,activo,medico_id) 
values ('2022-04-26', '14:30:00','15:30:00','1','2'); 


select * from Horario;


-- *******************************************
-- DML PACIENTES
-- *******************************************
insert into Pacientes (DNI, nombres,apellidos,direccion,telefono,sexo,fechanacimiento,fecharegistro,fechamodificacion,estado,foto) 
values ('1234568745', 'JUAN','RODRIGUEZ','CUENCA','0956365234','M','2003-04-26','2022-04-26','2022-04-28','1',''); 
insert into Pacientes (DNI, nombres,apellidos,direccion,telefono,sexo,fechanacimiento,fecharegistro,fechamodificacion,estado,foto) 
values ('1245215412', 'CHELA','PAUCAR','BABAHOYO','0956325252','F','2004-05-20','2022-06-06','2022-06-08','1',''); 

select * from Pacientes;


-- *******************************************
-- DML CITAS
-- *******************************************

-- estado - A-Activo   D-Desactivo
insert into Citas (paciente_id, horario_id, estado, activo) 
values (1, 1,'Pendiente','1'); 
insert into Citas (paciente_id, horario_id, estado, activo) 
values (2, 2,'Pendiente','1'); 

select * from Citas;






