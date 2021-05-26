# RENOMBRAR TABLA

ALTER TABLE usuarios RENAME TO usuarios_renom;

# CAMBIAR NOMBRE DE UNA COLUMNA 

ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# AÑADIR UNA COLUMNA

ALTER TABLE usuarios ADD web varchar(100) null;

# AÑADIR RESTRICCION A COLUMNA

ALTER TABLE usuarios ADD CONSTRAINT uq_email UNIQUE(email); 
/* no puede haber más de un email*/

#  BORRAR UNA COLIMBA

ALTER TABLE usuarios DROP web;

