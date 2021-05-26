/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  macbookair
 * Created: 02-may-2021
 */
/*
intipo de dato int(n de caracteres) ENTERO



/*
CREAR TABLA
int (n de cifras) ENTERO
Integer (n de cifras) ENTERO (mX 4294967295)
Varchar (n de cifras) ESTRING/ ALFANUMERICO (Max 255 caracteres)
Char (n de cifras) STRING/ALFANUMERICO
float (n de cifras) DECIMAL / COMA FLOTANTE
Date, time, timestamp
//strings mas grandes
TEXT 65535 caracter
MEDIUNTEXT 16 Millones de caracteres
Longtext 4 billones de caracteres
*/

CREATE TABLE usuarios(
id  int(11) auto_increment not null ,
nombre varchar(100) not null,
apellidos varchar(100) default 'apellido',
email varchar(100) not null,
password varchar (100) not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
