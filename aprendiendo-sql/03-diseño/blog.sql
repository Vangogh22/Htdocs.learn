CREATE TABLE usuarios(
id int(255) auto_incremente not null,
nombre varchar(100) not null,
apellidos varchar(100) not null,
mail varchar(100) not null,
password varchar(255) not null,
fecha date not null,
CONSTRAINt pk_usuarios PRIMARY KEY(id)
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;
/* CONSTRAIN pk(primary key)_(nombre de la tabla) (instruccion y el campo)PRIMATY KEY(id)
int()integrer: entero*/

/*hizo primero la talba que no tienen ninguna relacion, categoria, cuando ejecutemsos el codigo no habra fallo al detectar que cierta tabla existe*/
 
CREATE TABLE categorias(
id int(255) auto_increment no null,
nombre varchar(100),
CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;
/* aca veremos las claves ajenas*/

CREATE TABLE entradas(
id        int(255) auto_increment not null,
usuario_id int(255)not null, # clave ajena con 255 caracteres por que hace referencia el ide de 255 caracteres
categoria_id int(255) not null,
titulo varchar (255) not null,
descripción MEDIUMTEXT null,
fecha date not null,
CONSTRAINT pk_entradas PRIMARY KEY (id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id/*campo que apunta fuera de la tabla*/) REFERENCES /*a que tabla hace refenrencia (el campo de esta table)*/ usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES usuarios(ide)
)ENGINE=InnoDb;
/*relaciones a otras tablas clave primaria ID CONSTRAINT pk_entradas PRIMARY KEY(id)

definir las claves ajenas: CONTRAINT fk(foreing Key)_entrada_usuario(a que tabla apunta: tabla_tabla referida) FOREIGN KEY(usuario_id: que campo apunta fuera de la tabla) a que tabla hace referencia REFERENCES usuarios(id)