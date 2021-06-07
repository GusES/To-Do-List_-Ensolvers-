# ToDo List -Ensolvers-
Requisitos:
=============================================
Incluidos en el paquete 3.3.0 de XAMPP
*MariaDB 10.4.19
*PHP 8.0.6
*Apache 2.4.47

Dependientes de Internet o browsers
*Google Chrome 91.0.4472.77
*JavaScript ES6
*Conexion a Internet para cargar CDN de:
  -JQuery 3.6.0
  -Bootstrap 5  
  
Credenciales de Ingreso:
=============================================
Las credenciales se deben estar en minusculas. La contraseña esta hasheada en la base de datos.
Usuario: admin
Contraseña: admin

Configuracion:
=============================================
1 Importar la base de datos incluida en la carpeta "db".
  -La importacion creara una base con nombre todo_list por defecto. 
  -Dentro de ella tres tablas tasks, folders y users (unica con contenido).
2 Volcar los archivos en htdocs(raiz o subcarpeta) dentro de la carpeta XAMPP, respetando la jerarquia mostrada.
3 Abrir el localhost si se volcaron en raiz o localhost/subdirecto de caso contrario previo inicio de XAMPP.

Que se realizo?:
=============================================
*Formulario de ingreso con validaciones sencillas.
*Vista de lista de carpetas de tareas con validaciones sencillas.
*Vista de creacion carpetas de tareas con validaciones sencillas..
*Opcion de eliminacion de carpetas de tareas con validaciones sencillas.
*Vista de lista de tareas dentro de carpetas con validaciones sencillas
*Vista de creacion de tareas dentro de carpetas con validaciones sencillas
*Opciones de edicion de estado mediante checkbox.
*Cerrado de sesion.
*Diseño responsivo mediante Bootstrap.

Sobre el Desarollo:
=============================================
Modelo-Vista-Controlador usando PHP, AJAX y JSON.
Modelo en Progracion orientada a objetos con PHP.
Vista unica, modulos que cargan mediantes AJAX.
Controladores varios para cada vista o accion.
Consultas SQL utilizando PDO-SQL.

Que falto?:
=============================================
*Modificacion del nombre de tareas. (por falta de tiempo)

Opinion personal
=============================================
Un reto simple pero divertivo, no obstante tuvo su complejidad dado que decidi realizarlo con los nuevos conociemientos que he aprendido en el ultimo tiempo para evitar que el vista se recargue por cada accion, ademas de utilizar un metodo mas confiable de SQL. Sumado a que tuve que migrar recientemente a Visual Studio Code porque Brackets ya no tiene soporte. Pero en resumen fue una gran experiencia.
