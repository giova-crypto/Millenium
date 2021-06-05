# Millenium
##Programa solicitado para la segunda etapa

### Descripción:
El formulario debe registrar los datos en una base de datos Mysql, el prospecto debe crear la Base de Datos y la tabla con su respectivo campos.

Se requiere enviar los datos del FrontEnd a el BackEnd utilizando la tecnología AJAX  para realizar esta acción, la pagina en donde se encontrará el formulario no se debe refrescar.

Al guardar los datos se debe de mostrar un mensaje indicando que la información ha sido guardada correctamente.

Consideraciones:
- Para el BackEnd utilizar PHP nativo, no se emplea Framework.
- Utilizar AJAX para el envío de los datos.
- Para el FrontEnd puede utilizar Bootstrap o cualquier framework de preferencia.

Al finalizar la tarea cargar el proyecto en un repositorio github ó gitlab y compartir el enlace del repositorio en donde se cargó el proyecto al correo.

Software Millennium.ium.
### Desarrollo
El programa fue desarrollado según lo requerido con **PHP puro**, **AJAX** para envío de datos y para el frontend se utilizó **Bootstrap** como framework, **SweetAlert2** para las alertas en pantalla y **Bootstrap Icons** para un par de íconos.

### Código usado para crear la base de datos
>La base de datos fue creada en phpMyAdmin pero se pueden usar DBMS diferentes a este debido a la implementación de PDO en el programa.

#### Crear base de datos "millenium"
```
CREATE DATABASE millenium;
```
#### Crear tabla "datos"
```
CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

