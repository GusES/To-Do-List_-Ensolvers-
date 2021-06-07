# To Do List -Ensolvers-
<br />
Requisitos:
<br />
=============================================
<br />
Mudulos en el paquete 3.3.0 de XAMPP
<br />
__MariaDB 10.4.19
<br />
__PHP 8.0.6
<br />
__Apache 2.4.47
<br />
Dependientes del browsers
<br />
___Google Chrome 91.0.4472.77
<br />
___JavaScript ES6
<br />
Conexion a Internet para cargar CDN de:
<br />
___JQuery 3.6.0
  <br />
___Bootstrap 5    
  
Credenciales de Ingreso:
=============================================
Las credenciales se deben estar en minúsculas. La contraseña esta hasheada en la base de datos.
<br />
Usuario: admin
<br />
Contraseña: admin

Configuracion:
=============================================
1 Importar la base de datos todo_list.sql incluida en la carpeta "db".
<br />
  -La importacion creara una base con nombre todo_list por defecto. 
  <br />
  -Dentro de ella generara tres tablas tasks, folders y users (unica con contenido).
  <br />
2 Volcar los archivos en htdocs(raiz o subcarpeta) dentro de la carpeta XAMPP, respetando la jerarquia dada.
<br />
3 Abrir el localhost si se volcaron en raiz o localhost/subdirecto de caso contrario, previo inicio de XAMPP.
<br />

Que se realizo?:
=============================================
Formulario de ingreso con validaciones sencillas.
<br />
Vista de lista de carpetas de tareas con validaciones sencillas.
<br />
Vista de creacion carpetas de tareas con validaciones sencillas.
<br />
Opcion de eliminacion de carpetas de tareas con validaciones sencillas.
<br />
Vista de lista de tareas dentro de carpetas con validaciones sencillas.
<br />
Vista de creacion de tareas dentro de carpetas con validaciones sencillas.
<br />
Opcion de edicion del estado de la tareas.
<br />
Cerrado de sesion.
<br />
Diseño responsivo mediante Bootstrap.

Sobre el Desarollo:
=============================================
Modelo-Vista-Controlador usando PHP, AJAX y JSON.
<br />
Modelo en Progracion orientada a objetos con PHP.
<br />
Vista unica, modulos que cargan mediantes AJAX.
<br />
Controladores varios para cada vista o accion.
<br />
Consultas SQL utilizando PDO-SQL.

Que falto?:
=============================================
*Modificacion del nombre de tareas.

Opinion personal
=============================================
Un reto simple pero divertido, no obstante tuvo su complejidad dado que decidí realizarlo con los nuevos conocimientos que he aprendido en el ultimo tiempo para evitar que la vista se recargue por cada acción, además de utilizar un método mas robusto como PDO-SQL. Sumado a que recientemente migre a Visual Studio Code porque Brackets ya no tiene soporte. Pero en resumen fue una gran experiencia.
