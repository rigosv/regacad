Registro Académico Universitario. 
================================

Construido en Symfony2 y jQuery

Instalación
-----------

### Clonar el proyecto
    git clone https://github.com/rigosv/regacad.git

### Instalar composer
    $ curl -s http://getcomposer.org/installer | php
    $ sudo mv composer.phar /usr/local/bin/composer

### Instalar dependencias con composer
    cd regacad
    composer install

### Instalar assets
    app/console assets:install web --symlink

### Configurar un virtual host
Se debe configurar el servidor web para cargar el proyecto, el mio se llamará regacad.localhost

### Configurar la base de datos
Cargar http://regacad.localhost/config.php y realizar la configuración de la aplicación

### Crear la base de datos
    app/console doctrine:database:create
Este proyecto está realizado para la base de datos PostgreSQL por lo cual antes se debe crear 
dentro de PostgreSQL el schema reg_acad, para otros gestores como MySQL no sería necesario. 

Luego ejecutar:
    app/console doctrine:schema:create

### Cargar datos de prueba (opcional)
    app/console doctrine:fixtures:load
