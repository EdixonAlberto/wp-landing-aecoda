# WP Landing Aecoda

Landing que ofrece visibilidad sobre objetivos y proyectos de la Asociación Contra el Desperdicio de Alimentos.

## Preparar Entorno

- Instalar LAMP (Apache, MySql, PHP) en el servidor.

- Clonar este repositorio en la ruta [C:/xampp/htdocs](C:\xampp\htdocs) (Windows) o [/var/www/html](/var/www/html) (Linux)

- Crear desde apache un virtual host en la ruta `${SERVER_ROOT}/wp-landing-aecoda`, se comparte un código de ejemplo en [docs/httpd-vhost-example.conf](./docs/httpd-vhost-example.conf)

- Modificar el host del servidor para agregar el nuevo dominio `aecoda.com`
```sh
127.0.0.1     aecoda.com
```

- Iniciar `phpMyAdmin` para restaurar la base de datos importanto el siguiente archivo [aecoda_db.sql](./docs/aecoda_db.sql)

- Ingresar desde el navegador a la ruta [http://aecoda.com/wp-admin](http://aecoda.com/wp-admin) e iniciar sesión en el CMS con las siguientes credenciales:
```sh
Usuario:    admin
Contraseña: !Ad*uWWL##nbj0u(Z&
```

## Editar Landing (Desarrollar)

- Usar WordPress

Ir a la sección `Páginas` y pegar el html escrito en [wp-content/uploads/landing.html](./wp-content/uploads/landing.html)

- Usar un Editor de Código

En la ruta [wp-content/uploads](./wp-content/uploads) se encuentran los archivos necesarios para editar el landing
 1. Template [wp-content/uploads/landing.html](./wp-content/uploads/landing.html)
 2. Styles [wp-content/uploads/main.css](./wp-content/uploads/main.css)
 3. JavaScript [wp-content/uploads/main.js](./wp-content/uploads/main.js)
