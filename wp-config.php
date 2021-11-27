<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lavnon_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm#KN3lG7GZ@ZC:*uei=lMbR%Ae :f+LCbtj5,sph%_1|.PK)Pp,R#l:bf*08BYB-' );
define( 'SECURE_AUTH_KEY',  'j~tc:S%~o,Uop<HcM)|-qs0y3[zP>Jmm;I8-xDM#2KUOza(+d7Q4q><HsW87?qQL' );
define( 'LOGGED_IN_KEY',    '/i&#BR6VF -3>cC*]] m5>B}]J`C?Gx-oWfkQRV<vpjX7Bz%{Hf}Jq&ceW(c2L<0' );
define( 'NONCE_KEY',        'K}26g]P4L_.SoT~QB[OSZ?UXJ<EU2Zo~d?@lS4l;MSiO_AC#}MUcoPT9[R.392&w' );
define( 'AUTH_SALT',        'n[~2XO~iu(x2hr2yOh$1]^t8$.U%mi2RW9C9v/Z$j6,)qxTkyt0InRFL0S<f?Jt`' );
define( 'SECURE_AUTH_SALT', 'g 6! 3C/|23+yrRw~N6)2D` o]<l}@li-A,VTqKxEG/uZSlG=]-5oU-}`zVv$t,,' );
define( 'LOGGED_IN_SALT',   'j}}CxQp)AP;d_roms]+(VRkm@}m7]P{*d#_^@7Fb6ZDq.i_|R18p0BEBcTAw=d)Q' );
define( 'NONCE_SALT',       '|nj/}6~J-V{cUYn/WWk]l82t[vrJ/>c;}BTP3XK;ilip->@)b|n*U/ysI}GUyv&}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
/* Add any custom values between this line and the "stop editing" line. */

define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
