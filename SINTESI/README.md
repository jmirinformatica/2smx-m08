# Manuals per al mòdul de Síntesi

Aquest document conté els manuals i indicacions necessàries per a la instal·lació del programari del mòdul de síntesi.

Els manuals són adaptacions i/o resums de manuals trobats online en format PDF. S'inclou la font original d'in s'ha extret.

## MySQL

* [https://phoenixnap.com/kb/install-mysql-ubuntu-20-04](https://phoenixnap.com/kb/install-mysql-ubuntu-20-04)
* [*Versió en PDF*](pdf/phoenixnap.com-How_to_Install_MySQL_on_Ubuntu_2004.pdf)

Recorda guardar el password de l'usuari root del MySQL.

Per a evitar fer servir l'usuari root, crea un usuari `admin`:

    sudo mysql

    CREATE USER 'admin'@'%' IDENTIFIED BY 'admin123!';

    GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%';

## PHP 7.4

Per limitacions amb l'eina owncloud, farem servir PHP v7.4, enlloc de la versió 8.

* [https://www.linuxcapable.com/es/como-instalar-php-7-4-en-ubuntu-20-04-lts/](https://www.linuxcapable.com/es/como-instalar-php-7-4-en-ubuntu-20-04-lts/
)
* [*Versió en PDF*](pdf/linuxcapable.com-Como_instalar_PHP_74_en_Ubuntu_2004_LTS.pdf)

Aneu amb compte que el manual té un error, i en la comanda d’instal·lació de php 7.4, on diu:

    sudo apt install php-7.4 libapache2-mod-php7.4 -y

Ha de dir:

    sudo apt install php7.4 libapache2-mod-php7.4 -y

és a dir, sense el guió abans del 7.

## phpMyAdmin

A la carpeta `/var/www`

Descarrega la darrera versió de phpMyAdmin:

    wget https://files.phpmyadmin.net/phpMyAdmin/5.1.3/phpMyAdmin-5.1.3-all-languages.zip

Descomprimeix-la

    sudo unzip phpMyAdmin-5.1.3-all-languages.zip

Esborra el fitxer zip:

    sudo rm phpMyAdmin-5.1.3-all-languages.zip

Esborra la carpeta de prova phpmyadmin que ja tenies:

    sudo rm -fr phpmyadmin

Renombra la carpeta que has descarregat:

    sudo mv phpMyAdmin-5.1.3-all-languages phpmyadmin

Instal·la l'extensions de PHP necessàries per a que funcioni correctament phpmyadmin:

    sudo apt install php7.4-cgi php7.4-mbstring php7.4-common php7.4-mysql

Reinicia l'apache2:

    sudo service apache2 restart

Entra amb el navegador al phpmyadmin i fes login amb l'usuari `admin` que has creat a MySQL.

## Owncloud

* [https://kifarunix.com/install-owncloud-server-on-ubuntu-22-04/](https://kifarunix.com/install-owncloud-server-on-ubuntu-22-04/)
* [*Versió en PDF*](pdf/kifarunix.com-Install_ownCloud_Server_on_Ubuntu_2204.pdf)

## MDWiki

A la carpeta `/var/www/wiki` descarrega el contingut de la carpeta wiki del repositori següent: [https://github.com/alfonsovng/mdwiki](https://github.com/alfonsovng/mdwiki).

Els documents en markdown s'han d'ubicar dins de la carpeta wiki i el fitxer que es carregarà inicialment és el fitxer `index.md`.

## PrestaShop

* [https://www.how2shout.com/linux/how-to-install-prestashop-on-ubuntu-20-04-server/](https://www.how2shout.com/linux/how-to-install-prestashop-on-ubuntu-20-04-server/)
* [*Versió en PDF*](pdf/how2shout.com-How_to_install_PrestaShop_on_Ubuntu_2004_Server.pdf)

Tingues en compte que la versió de php és la 7.4. Ves en compte a l'hora d'instal·lar les llibreries php que surten al manual. Has d'instal·lar la versió 7.4 d'aquestes llibreries.
