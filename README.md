
## Backend App Lista de Tareas(tasklist) en Laravel

 Backend de lista de tareas desarrollada con laravel para que sea consumida desde la app del frontend que se realizó en React.js el cual también puedes encuentras en mis repositorios.

 ## ¿Cómo lo ejecuto en local?

 Clona este repositorio.

 ```
 git clone https://github.com/alexis19b/Backend-tasklist.git
 ```
Abre el proyecto en la carpeta donde lo descargaste en tu editor de código favorito

En la terminal de comandos ejecuta:
instalar las dependencias
```
composer install
 ```
Agrega el archivo .env donde estarán las variables de entorno
 ```
cp .env.example .env 
 ```

 ```
php artisan key:generate 
 ```
Ingresa al proyecto y modifica las variables con los datos de tu conexión a la base de datos Ejemplo:

 ```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tareas
DB_USERNAME=root
DB_PASSWORD=
 ```
Ingresa a tu gestor de base de datos Mysql y crea una DB con el nombre que colocaste en la configuración aterior

Luego regresa a la terminal y ejecuta el siguiente comando:

 ```
php artisan migrate --seed
 ```

 Levanta el servidor con el comando:

  ```
php artisan serve serve
 ```





