## Social Network 0.0.1 - System Developed with Framework Laravel v-5.2

## Instalação

#### 1 - Dependências do Projeto

Requisitos help -> https://github.com/angelo-ti/dependencias

    php 5.5.9+
    composer
    apache
    node.js
    npm
    bower

#### 2 - Instalacao

##### 1 - Dependências do Frontend

Após instalar Requisitos, na raiz do projeto, execute o seguinte comando:

    npm install

Após Excutar npm install, temos que fazer instalação do bower com seguinte comando:

    npm install -g bower

No diretorio "Public",só instalar as dependências do bower

    bower install -allow-root

##### 2 - Dependências do Projeto

Para instalar as dependências do projeto, execute o seguinte comando:

    composer install

##### 3 - Migrações

Para criar as tabelas necessárias, basta rodar o comando:

    php artisan migrate

##### 4 - Assets

Precismos instalar o gulp, execute o seguinte comando

    npm install -g gulp

Para gerar os arquivos compilados do frontend, você pode fazer isso com o comando:

    gulp

##### 5 - Server Start

Para inicar o APP php artisan

    php artisan serve -> http://localhost:8000
    php artisan server --host "ip" --port "30" -> http://ip:port

APP por Vhost apache

        <VirtualHost *:80>
            ServerName app
            ServerAdmin admin@admin.com
            DocumentRoot /var/www/html/app/public
            ErrorLog ${APACHE_LOG_DIR}/error.log
            CustomLog ${APACHE_LOG_DIR}/access.log combined

            <Directory /var/www/html/gda.app/public>
                <IfModule mod_rewrite.c>
                    Options -MultiViews
                    RewriteEngine On
                    RewriteCond %{REQUEST_FILENAME} !-f
                    RewriteRule ^ index.php [L]
                </IfModule>
            </Directory>
        </VirtualHost>
