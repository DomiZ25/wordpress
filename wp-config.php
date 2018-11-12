<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'esmnbd');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'esmn');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'esmn123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'JwN0d&x7R6EPyE.<OZ=2V:6G?TQTMyq D+i03?;$y=zvV{E/4K*:#EY3BgS,A;#v');
define('SECURE_AUTH_KEY', 'w+2p{dhIrkiH&xStn~j)Im>Lg7!>x]qGov7glM1^d[h|bT~|Pit8-P6:#4!1I;{l');
define('LOGGED_IN_KEY', 'uRPiA?$`N,wW,&Z1f=W3%=?f#gcj7>MS<V_Rtou/M W 4t*q#3&sGU8^gWk2^c?B');
define('NONCE_KEY', '<ttK>;F?/}u-vOpS*xqA2`Fg,^<k:],^xx0@*68(m|W;q_5?B-oOb%squCPWlg:M');
define('AUTH_SALT', '{2:PgG/kKhZ6~uSlYJ?>MmYi%oDnStQT_+/wq/c;Fk>/4-:^EgzvBb_W:/(Yn,rW');
define('SECURE_AUTH_SALT', 'mNf,DNZ`Rn| pjTB0t@GV5s_|-E>{?.|%6=fSuH&hNz:&;U,;7)hW/ q#x5]5?3P');
define('LOGGED_IN_SALT', 'J3+hx_t<jseHBTr-3~)J*W&J?IT-Ee.{=3DDFR%W7oG}1O^]F`AT,!bGIuF2=H/b');
define('NONCE_SALT', 'SC|O&#-8,g=Lk1j(dD-H7rr^V+|jL{3N-OaUe,}<G*A(6N>/h5 !E>!ghKHc&w05');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

