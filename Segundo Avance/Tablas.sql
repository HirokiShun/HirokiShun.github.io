CREATE DATABASE TIENDA_PWCI;
USE TIENDA_PWCI;


create table Usuarios
(
	id INT not null AUTO_INCREMENT PRIMARY KEY,
	Correo varchar(50),
	Nickname varchar(80),
	Contraseña varchar(8),
	Rol_Usuario varchar(20),
	Imagen longblob,
	NombreCompleto varchar(100),
	Fecha_Nacimiento date,
	sexo varchar(10),
	Fecha_alta datetime,
	Tipo_Perfil varchar(16),
    Activo bit default 1 
);

create table Listas
(
	id INT not null AUTO_INCREMENT PRIMARY KEY,
	usuario int,
	Nombres varchar(100),
	Descripcion varchar(300),
	Estado varchar(20),
	Miniatura blob,
 
	FOREIGN KEY(usuario) REFERENCES Usuarios(id)on delete cascade
);


create table Categorias
(
	id INT not null auto_increment primary key, 
	usuario int,
	descripcion varchar(100),
	Aprovación bit,
	AprovadoPor varchar(100),
   
	FOREIGN KEY(usuario) REFERENCES Usuarios(id)on delete cascade
);



create table Productos 
(
	id INT not null auto_increment primary key,
	usuario int,
	nombre varchar(100),
	descripcion varchar(3000),
	categoria int,
	cotizable bit,
	precio float,
	cantidad_disponible int,
	valoracion int,
	Aprovación bit,
	AprovadoPor varchar(100),
   
	FOREIGN KEY(usuario) REFERENCES Usuarios(id)on delete cascade,
	FOREIGN KEY(categoria) REFERENCES Categorias(id)on delete cascade
 
);


create table Conversacion
(
	Id INT not null auto_increment primary key,
	descripcion varchar(250),
    PrecioCotizado float,
    Aprovacion bit,
    AprovadoPor int,
	vendedor int,
	comprador int,
    
	FOREIGN KEY(AprovadoPor) REFERENCES Usuarios(id)on delete cascade,
	FOREIGN KEY(vendedor) REFERENCES Usuarios(id)on delete cascade,
	FOREIGN KEY(comprador) REFERENCES Usuarios(id)on delete cascade
);


create table Mensaje
(
	id INT not null auto_increment primary key,
	emisor int,
	receptor int,
	cuerpo varchar(300),
	fecha datetime,
	Conversacion int,
	Primer_Mensaje bit,
 
 
	FOREIGN KEY(emisor) REFERENCES Usuarios(id)on delete set null,
	FOREIGN KEY(receptor) REFERENCES Usuarios(id)on delete set null,
	FOREIGN KEY(Conversacion) REFERENCES Conversacion(id)on delete cascade
);

create table Carritos
(
	Codigo int not null auto_increment primary key,
	usuario int,
	fecha_alta datetime,
	subtotal float,
	IVA float,
	total float,

	FOREIGN KEY(usuario) REFERENCES Usuarios(id)on delete cascade
);

create table Comentario
(
	id int not null auto_increment primary key,
	author int,
	fecha datetime,
	texto varchar(300),
	Producto int,
 
	FOREIGN KEY(author) REFERENCES Usuarios(id)on delete cascade,
	FOREIGN KEY(Producto) REFERENCES Productos(id)on delete cascade
);

create table Video
(
	id int not null auto_increment primary key,
	video  varchar(50),
	producto int,
 
	FOREIGN KEY(producto) REFERENCES Productos(id)on delete cascade
);

create table foto
(
	id int not null auto_increment primary key,
	foto longblob,
	producto int,
	primer_foto bit,
 
	FOREIGN KEY(producto) REFERENCES Productos(id)on delete cascade
);

/*TABLAS DE RELACIONES MUCHOS A MUCHOS*/
create table Conversacion_ProductoMM
(
RelID int PRIMARY KEY AUTO_INCREMENT,
	CID int,
	PID int,
 
	foreign key(CID) REFERENCES conversacion(id),
	foreign key(PID) REFERENCES productos(id)
);

create table Carrito_ProductosMM
(
	RelID int PRIMARY KEY AUTO_INCREMENT,
	CID int,
	PID int,
	cantidad int,
	Comprado bit,
  
	FOREIGN KEY(CID) REFERENCES Carritos(codigo) on delete cascade,
	FOREIGN KEY(PID) REFERENCES Productos(id) on delete set null
);


create table Lista_ProductosMM
(
	RelID int PRIMARY KEY AUTO_INCREMENT,
	LID int,
	PID int,

	FOREIGN KEY(LID) REFERENCES Listas(id) on delete cascade,
	FOREIGN KEY(PID) REFERENCES Productos(id) on delete set null
);

create table Categoria_ProductosMM
(
	RelID int PRIMARY KEY AUTO_INCREMENT,
	CATID int,
	PID int,

	FOREIGN KEY(CatID) REFERENCES Categorias(id) on delete cascade,
	FOREIGN KEY(PID) REFERENCES Productos(id) on delete set null
);