# Miskatonic
> Nicolás Moreno Sánchez
![Imagen presentacion](https://user-images.githubusercontent.com/91120049/161498683-57323a1b-316b-4078-8ec0-7c7caa3ee5ed.png)

### Semana 1 (Viernes 15 de abril)

Creación del proyecto con Laravel. He estado realizando el sistema de clases de CSS para facilitarme el diseño en el futuro
(\resources\css\styles.css). He comenzado la creación de la vista de la página de inicio (para aquellos usuarios no
registrados), es completamente estática, no tiene conexión con el backend por ahora.

### Semana 2 (Viernes 22 de abril)

He completado casi al completo el diseño de la página de inicio, que además ha sido configurada correctamente como tal
en Laravel. El sistema de autenticación ya está configurado, aunque es necesario aplicar los estilos a los formularios
de login y registro.

### Semana 3 (Viernes 29 de abril)

He comenzado a dividir el diseño en módulos para facilitar su uso (nav, content, footer, etc). También, he creado las migraciones de la base de datos, y finalmente he creado una tabla más de las que tenía previstas (bookmark), para almacenar la última página leída de cada libro que comienze a leer el usuario (es una nueva tabla intermedia entre usuario y libro).

### Semana 4 (Viernes 06 de mayo)

Creación de los sliders en la página de home (no están conectados a la base de datos aún, funcionan de forma estática). He estado
trabajando en el sistema de autenticación; los usuarios ya pueden registrarse e iniciar sesión. Hay correción de errores
únicamente en el login por ahora. Aún no se distingue entre usuarios normales y administradores.

### Semana 5 (Viernes 13 de mayo)

Al ser la semana de la revisión, eplicaré un poco por encima todo lo hecho hasta ahora. En tema de CSS he creado ya todos los
elementos y componentes que pienso usar en la aplicación. La mayoría de páginas disponibles para el usuario están todas
disponibles (tan solo me queda conectarlas con el backend). En cuanto a JS, el visualizador de PDFs es ya 
funcional, tan solo me queda conectarlo con el backend para que lleguen los archivos. Además, he cread varios sliders a lo
largo de la páagina. Actualmente estoy trabajando con Laravel. La base de datos ya ha sido creada, el sistema de login
ya funciona, tan solo me queda añadir validación en el formulario de registro. Estoy realizando el CRUD que estará
disponible para los administradores para que puedan poblar la base de datos, la mayoría de las tablas que quiero que tengan
un CRUD ya lo tienen. Para ciertas tablas es posible que las gestione con Ajax Jquery en vez de los controladores porque
necesito que los datos se manejen en tiempo real.

### INTRODUCCIÓN

**Miskatonik** es una biblioteca online que contedrá información, obras y biografías sobre el escritor **H.P. Lovecraft**
y sus allegados. Las funciones de la web serán:

	● Sistema de login. Se diferenciará entre al menos dos tipos de usuarios (administrador y 
	suscriptor). No se permitirá el acceso más allá de la página de inicio a aquellos que no
	tengan cuenta en la web.
		
	● Sistema de administración. Se podrá subir nuevo contenido, además de modificar 
	y eliminar el existente.
		
	● Lector de PDFs. Mediante la librería PDF.js crearé un reproductor personalizado en el 
	que el usuario podrá leer los libros que desee.
	
	● Marcapáginas. El usuario podrá seguir de forma automática por la última página que haya 
	leido al abrir de nuevo el libro.
		
	● Colores. El usuario podrá cambiar los colores del reproductor para leer de forma cómoda, 
	en principio podrá elegir entre día, noche y sepia.
		
	● Favoritos. El usuario podrá guardar en favoritos aquellos libros que desee.
		
	● Sistema de búsqueda. A través de una barra de búsqueda el usuario podrá buscar el 
	contenido.
		
	● Responsive. La aplicación estará adaptada a pantallas web y móviles.

### TECNOLOGÍA

En un principio, el proyecto será construido mediante:

	● Laravel, para el backend y el scaffolding.

	● JavaScript y CSS para el frontend.

	● Jquery para manipular ciertos elementos del DOM.

	● MySQL para las bases de datos.

### SCAFFOLDING

La web contará con páginas ocultas solo accesibles para los administradores, además de una 
página inicial que será accesible para todos los usuarios. Para poder usar la web con normalidad 
será necesario la creación de una cuenta por parte del usuario. Tendrá varias páginas disponibles; 
menú inicial, menú de busqueda, listas, autores, etc. Mediante JS añadiré elemtos que faciliten el
uso de la web, como sliders, galerías, listas, etc.

### SISTEMA DE DISEÑO

Mi objetivo es crear un **sistema de diseño** mediante CSS con clases predefinifas para facilitarme 
en un futuro la creación del estilo de la web. Crear mi propio 'TailwindCSS'. Tendré un estilo predefinido
desde el principio para crear una web compacta y cohesionada. Tipografía, colores, espaciado y atributos 
similares serán claramente definidos desde primer momento.
	
> Puedes consultar la evolución del sistema de diseño en: https://github.com/nicoms13/django-designsystem.git
El sistema de diseño no está aún actualizado a la temática porque he decido cambiarla recientemente (por eso
el nombre es django).

![Imagen home](https://user-images.githubusercontent.com/91120049/161532329-62c0a453-20f5-40bc-b405-582abe931059.png)

### BASE DE DATOS

Las tablas que formarán la base de datos serán Usuario, Libro (la cual tendrá un campo para diferenciar
entre películas y series), Categoría, libroCategoría (tabla intermedia), Autor, libroAutor (tabla 
intermedia) y Lista (tabla donde se almacenará el ID del usuario y el ID del libro que quiera guardar).

En la tabla usuarios se almacenará además el tipo de perfil del usuario, para diferenciar entre 
administradores y usuarios normales. La tabla Libro heredará una clave foránea, el ID del 
autor. He decidido no crear una tabla intermedia entre la relación Lista y Usuario porque el
usuario tendrá únicamente una Lista en la que añadirá los títulos favoritos, por lo que me 
parecía redundante crear una tabla intermedia. Entre libro y autor será necesario una tabla 
intermedia porque ciertos libros están escritos por más de un autor.

![Imagen bd](https://user-images.githubusercontent.com/91120049/161692122-9c2df334-bdf9-4d82-b6b8-959b5622d01f.png)
> Click en la imagen para verla a mejor resolución

### DESPLIEGUE

La aplicación será desplegada en un hosting gratuito, posiblemente InfinityFree o Heroku. Por lo tanto el nombre
de dominio tendrá publicidad del host utilizado. En cuanto a la base de datos, se que si finalmente uso
InfinityFree, el host te provee automáticamente un servidor diferente para almacenar la base de 
datos. Desconozco si Heroku también lo permite, en caso de que sí, no tendré ningún problema en dividir
aplicación y base de datos.
