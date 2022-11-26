 CREATE DATABASE ProyectoCitasMedicas;
USE ProyectoCitasMedicas;

-- SETENCIA DDL 

CREATE TABLE Roles(
    id int primary key,
    descripcion varchar(50) not null,
    estado boolean not null
);

CREATE TABLE Personas (
    id int primary key auto_increment,
    DNI varchar(11) not null,
    nombres varchar(50) not null,
    apellidos varchar(50) not null,
    direccion varchar(150) not null,
    correo varchar(80) not null,
    telefono varchar(10),
    sexo varchar(1),
    estado boolean,
    CONSTRAINT CHK_Sexo CHECK (sexo = 'F' OR sexo = 'M')  
);



CREATE TABLE PersonaLogin(
    id int primary key auto_increment,
    usuario varchar(50) not null,
    contrasenia varchar(20) not null,
    persona_id int,
    rol_id int,
    FOREIGN KEY (persona_id) REFERENCES Personas(id)
);

CREATE TABLE Especialidades(
    id int primary key,
    descripcion varchar(50) not null,
    activo boolean not null
);

CREATE TABLE PersonaEspecialidades(
    persona_id int,
    especialidad_id int,
    FOREIGN KEY (persona_id) REFERENCES Personas(id),
    FOREIGN KEY (especialidad_id) REFERENCES Especialidades(id)

);

CREATE TABLE Pacientes(
    id int primary key auto_increment,
    DNI varchar(11) not null,
    nombres varchar(50) not null,
    apellidos varchar(50) not null,
    direccion varchar(120) not null,
    telefono varchar(10) not null,
    sexo varchar(1),
    fechanacimiento date not null,
    fecharegistro date not null,
    fechamodificacion date not null,
    estado boolean not null,
    CONSTRAINT CHK_Sexo CHECK (sexo = 'F' OR sexo = 'M')
);

-- Añadir un nuevo campo 
ALTER TABLE Pacientes ADD COLUMN foto VARCHAR(350) AFTER estado;

CREATE TABLE Horario(
    id int primary key auto_increment,
    fechadatencion date not null,
    inicioatencion time not null,
    finatencion time not null,
    activo boolean not null,
    medico_id int
    -- FOREIGN KEY (medico_id) REFERENCES Medicos(id)
);

CREATE TABLE Citas(
    id int primary key auto_increment,
    paciente_id int not null,
    persona_id int not null,
    estado varchar(1) not null,
    fechacita datetime not null,
    fechaatencion datetime,
    activo boolean not null,
    foreign KEY (id) references Pacientes(id),
    foreign KEY (id) references horario(id)
);


-- RELACIONES 
-- De la tabla personas especialidades a Horario 
ALTER TABLE Horario  ADD FOREIGN KEY (medico_id) REFERENCES personaespecialidades (persona_id);

-- DE HORARIOS A CITAS
-- ALTER TABLE Horario  ADD FOREIGN KEY (id) REFERENCES citas (id);


-- ROLES A PERSONA LOGIN
ALTER TABLE roles  ADD FOREIGN KEY (id) REFERENCES personaLogin (id);

