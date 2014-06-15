Dokify test
=======
Para instalar corréctamente este software es necesario tener varios puntos en cuenta, estos son requerimientos por parte de CakePHP:

Permisos
---
CakePHP usa el directorio /app/tmp para varias cosas, como guardar las descripciones de los modelos, la cache de las vistas y la información de sesión de los usuarios.

Debido a esto, asegúrate de que el directorio /app/tmp de tu instalación de CakePHP puede ser escrito por el usuario que ejecuta tu servidor web. Ten en cuenta que cuando tu servidor web se inicia, define un usuario como propietario del servicio. Este usuario suele llamarse ‘apache’ en algunas versiones de sistemas *nix. Por lo tanto la carpeta /app/tmp debe tener permisos de escritura para que el usuario propietario del servidor web pueda escribir dentro de ella.

Apache, mod_rewrite y .htaccess
---
CakePHP está escrito para funcionar con mod_rewrite sin tener que realizar ningún cambio. Normalmente ni te darás cuenta de que ya está funcionando, aunque hemos visto que para algunas personas es un poco más complicado configurarlo para que funcione bien en su sistema.
En caso de problemas consultar: [Instalación avanzada](http://book.cakephp.org/2.0/es/installation/advanced-installation.html).

Mas detalles sobre la instalación
---

[Documentación oficial CakePHP](http://book.cakephp.org/2.0/es/installation.html)

Configuración
---
El proyecto se proporciona listo para funcionar, pero se requiere restaurar la copia de la base de datos, para ello usaremos el archivo `dump.sql` situado en la raíz del proyecto.

Además será necesario establecer las variables de conexión para mysql en: `/app/Config/database.php`.

Author
------
__Jorge Garrido Oval__
* [https://github.com/FireZenk](https://github.com/FireZenk)

![Cake Power](https://raw.github.com/cakephp/cakephp/master/lib/Cake/Console/Templates/skel/webroot/img/cake.power.gif)