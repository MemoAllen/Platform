<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Instalar el proyecto

Una vez descargado y descomprimido el proyecto, es necesario abrir el proyecto en Visual Studio Code y mediante la terminal que nos brinda dicha herramienta, es necesario ingresar los siguientes comandos:
1.	composer install
2.	cp .env.example .env
3.	php artisan key:generate
Es momento de crear la base de datos por lo que ingresaremos a nuestro localhost y en phpmyadmin crearemos la bd con el nombre de “plataforma” (sin comillas). Una vez creada la base de datos ingresaremos el próximo comando que sirve para crear las migraciones necesarias para su funcionamiento.
Actualmente existe un pequeño error en las rutas de las imágenes que no las reconoce el comando al migrar por lo que es necesario ingresar el siguiente comando para poder ejecutar el proyecto
4.	php artisan storage:link
Y después el siguiente comando. En este momento se crearán las migraciones ya especificadas. 
5.	php artisan migrate:fresh --seed
Y para finalizar es momento de inicializar el servidor con el siguiente comando:
6.	php artisan serve
