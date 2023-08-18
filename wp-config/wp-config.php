<?php
define('WP_CACHE', true); // WP-Optimize Cache
define( 'WP_HOME', 'http://localhost:8880' );
define( 'WP_SITEURL', 'http://localhost:8880' );
define( 'AUTOMATIC_UPDATER_DISABLED', true );


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));
/** MySQL database username */
define('DB_USER', getenv('WORDPRESS_DB_USER'));
/** MySQL database password */
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
/** MySQL hostname */
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8_danish_ci');
define('AUTH_KEY',         'PP)GUMY6DmegZ]bH~Nn_j3KG}u:[N2$(g{d_-y5v1$O-=<|f-*6ja~66skk!LA(-');
define('SECURE_AUTH_KEY',  'zDx`|[P |Cm- dTIllMhQ5I!L;*sth=7TEx{>=*5v?{,_|(K--6^%@$JL[4MJz69');
define('LOGGED_IN_KEY',    '3~2nY_N]t%mswg$s$Lo8cU2Ux&1JV3^k+e~yaY++Z8cW[_+G+2&is&cO cE+|YHq');
define('NONCE_KEY',        '-A|)$Z-SdW3P:>;:<s|0ci=7B}|c9#O7~)*O 5r]54|Yi}qkxP5hdom+5axD#2$I');
define('AUTH_SALT',        'zS]tfy::,nPKfH~)xq4cb><YY.-m`y+nN$pm7_Z]wf_HpO<_ag+>5qx5|yKnk;#y');
define('SECURE_AUTH_SALT', 'MqNu9+[S!Jx|)4]Fr)i<NsdD27*:^7[^u,()cLy;|KiVrc/mG<dP7v3+{@[UZNDc');
define('LOGGED_IN_SALT',   'h&Umd+<%:8/5~Ql=vPlo-wQ^^Q)l!fd-|$B9GlX5O+N-Ed{>2&p-.iqX}OyH`$V>');
define('NONCE_SALT',       '.,&A3x&z,DF|ZiV{-|P;]kHVXWY--+zL3p9#.e^;~*o&1/1G-U.i_Z!ai4ID+4-w');
$table_prefix = 'wp_';
define('WP_DEBUG', getenv('WP_DEBUG'));
#define('WP_DEBUG_DISPLAY', false);
const WP_DEBUG_DISPLAY = false;
define('WP_DEBUG_LOG', getenv('WP_DEBUG_LOG'));
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
