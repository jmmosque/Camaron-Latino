-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2018-02-11 17:51:43.122

-- tables
-- Table: comentario
CREATE TABLE comentario (
    id_comentario serial  NOT NULL,
    comentario varchar(300)  NOT NULL,
    id_publicacion int  NOT NULL,
    id_usuario int  NOT NULL,
    CONSTRAINT comentario_pk PRIMARY KEY (id_comentario)
);

-- Table: credencial
CREATE TABLE credencial (
    id_credencial serial  NOT NULL,
    usuario varchar(10)  NOT NULL,
    clave varchar(10)  NOT NULL,
    CONSTRAINT credencial_pk PRIMARY KEY (id_credencial)
);

-- Table: producto
CREATE TABLE producto (
    id_producto serial  NOT NULL,
    id_usuario int  NOT NULL,
    producto varchar(30)  NOT NULL,
    descripcion varchar(100)  NOT NULL,
    id_tipo_producto int  NOT NULL,
    CONSTRAINT producto_pk PRIMARY KEY (id_producto)
);

-- Table: producto_imagen
CREATE TABLE producto_imagen (
    id_producto_imagen serial  NOT NULL,
    direccion varchar(40)  NOT NULL,
    nombre varchar(40)  NOT NULL,
    id_producto int  NOT NULL,
    CONSTRAINT producto_imagen_pk PRIMARY KEY (id_producto_imagen)
);

-- Table: publicacion
CREATE TABLE publicacion (
    id_publicacion serial  NOT NULL,
    titulo varchar(20)  NOT NULL,
    contenido varchar(300)  NOT NULL,
    id_usuario int  NOT NULL,
    CONSTRAINT publicacion_pk PRIMARY KEY (id_publicacion)
);

-- Table: rol
CREATE TABLE rol (
    id_rol serial  NOT NULL,
    nombre varchar(10)  NOT NULL,
    descripcion varchar(30)  NOT NULL,
    CONSTRAINT rol_pk PRIMARY KEY (id_rol)
);

-- Table: servicio
CREATE TABLE servicio (
    id_servicio serial  NOT NULL,
    id_tipo_servicio int  NOT NULL,
    id_usuario int  NOT NULL,
    servico varchar(30)  NOT NULL,
    descripcion varchar(100)  NOT NULL,
    CONSTRAINT servicio_pk PRIMARY KEY (id_servicio)
);

-- Table: servicio_imagen
CREATE TABLE servicio_imagen (
    id_servicio_imagen serial  NOT NULL,
    nombre varchar(40)  NOT NULL,
    direccion varchar(40)  NOT NULL,
    id_servicio int  NOT NULL,
    CONSTRAINT servicio_imagen_pk PRIMARY KEY (id_servicio_imagen)
);

-- Table: sugerencia
CREATE TABLE sugerencia (
    id_sugerencia serial  NOT NULL,
    tema varchar(20)  NOT NULL,
    mensaje varchar(100)  NOT NULL,
    id_usuario int  NOT NULL,
    CONSTRAINT sugerencia_pk PRIMARY KEY (id_sugerencia)
);

-- Table: tipo_producto
CREATE TABLE tipo_producto (
    id_tipo_producto serial  NOT NULL,
    nombre varchar(20)  NOT NULL,
    CONSTRAINT tipo_producto_pk PRIMARY KEY (id_tipo_producto)
);

-- Table: tipo_servicio
CREATE TABLE tipo_servicio (
    id_tipo_servicio serial  NOT NULL,
    nombre varchar(20)  NOT NULL,
    CONSTRAINT tipo_servicio_pk PRIMARY KEY (id_tipo_servicio)
);

-- Table: usuario
CREATE TABLE usuario (
    id_usuario serial  NOT NULL,
    nombre varchar(30)  NOT NULL,
    identificacion varchar(15)  NOT NULL,
    correo varchar(30)  NOT NULL,
    telefono varchar(10)  NOT NULL,
    direccion varchar(45)  NOT NULL,
    id_credencial int  NOT NULL,
    id_rol int  NOT NULL,
    CONSTRAINT usuario_pk PRIMARY KEY (id_usuario)
);

-- foreign keys
-- Reference: comentario_publicacion (table: comentario)
ALTER TABLE comentario ADD CONSTRAINT comentario_publicacion
    FOREIGN KEY (id_publicacion)
    REFERENCES publicacion (id_publicacion)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: comentario_usuario (table: comentario)
ALTER TABLE comentario ADD CONSTRAINT comentario_usuario
    FOREIGN KEY (id_usuario)
    REFERENCES usuario (id_usuario)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: producto_imagen_producto (table: producto_imagen)
ALTER TABLE producto_imagen ADD CONSTRAINT producto_imagen_producto
    FOREIGN KEY (id_producto)
    REFERENCES producto (id_producto)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: producto_tipo_producto (table: producto)
ALTER TABLE producto ADD CONSTRAINT producto_tipo_producto
    FOREIGN KEY (id_tipo_producto)
    REFERENCES tipo_producto (id_tipo_producto)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: producto_usuario (table: producto)
ALTER TABLE producto ADD CONSTRAINT producto_usuario
    FOREIGN KEY (id_usuario)
    REFERENCES usuario (id_usuario)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: publicacion_usuario (table: publicacion)
ALTER TABLE publicacion ADD CONSTRAINT publicacion_usuario
    FOREIGN KEY (id_usuario)
    REFERENCES usuario (id_usuario)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: servicio_imagen_servicio (table: servicio_imagen)
ALTER TABLE servicio_imagen ADD CONSTRAINT servicio_imagen_servicio
    FOREIGN KEY (id_servicio)
    REFERENCES servicio (id_servicio)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: servicio_tipo_servicio (table: servicio)
ALTER TABLE servicio ADD CONSTRAINT servicio_tipo_servicio
    FOREIGN KEY (id_tipo_servicio)
    REFERENCES tipo_servicio (id_tipo_servicio)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: servicio_usuario (table: servicio)
ALTER TABLE servicio ADD CONSTRAINT servicio_usuario
    FOREIGN KEY (id_usuario)
    REFERENCES usuario (id_usuario)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: sugerencia_usuario (table: sugerencia)
ALTER TABLE sugerencia ADD CONSTRAINT sugerencia_usuario
    FOREIGN KEY (id_usuario)
    REFERENCES usuario (id_usuario)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: usuario_credencial (table: usuario)
ALTER TABLE usuario ADD CONSTRAINT usuario_credencial
    FOREIGN KEY (id_credencial)
    REFERENCES credencial (id_credencial)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: usuario_rol (table: usuario)
ALTER TABLE usuario ADD CONSTRAINT usuario_rol
    FOREIGN KEY (id_rol)
    REFERENCES rol (id_rol)
    ON DELETE  CASCADE 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- End of file.

