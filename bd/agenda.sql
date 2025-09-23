CREATE TABLE t_contactos (
    id int auto_increment primary key,
    paterno varchar(20) not null,
    materno varchar(20),
    nombre varchar(20) not null,
    telefono varchar(20),
    email varchar(20),
    descripcion text
);


CREATE TABLE t_fotos(
    id int auto_increment primary key,
    id_contacto int,
    nombre varchar(50),
    ruta varchar(50)
);