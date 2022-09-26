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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms_2338200' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'X$ZjN;Ledp:|~+&_|Z*.[@}hD}=r&i@]V?HCt$Y +o2O8}qN;|,sH1q9/K+}<Oo5' );
define( 'SECURE_AUTH_KEY',  'BAE$Md82Wg=K;LckF!3nR`N{SB9<tqoJ*f?6aBhK6+5{(hu0?VZ`l@fZw4|TiUuR' );
define( 'LOGGED_IN_KEY',    'E!E$*:(Y@rh(hM+MCnj6vUSM:OOV5{u1^ThPS+ 4;}Fb$uLl=nW&Ii*uFzkiX~$1' );
define( 'NONCE_KEY',        'Y%|vqAp`t-c5lg6[9m.[zIoiB1ewL`~DW1[:Kd[/MFks,&,WuPojm#uc+O&8`m!]' );
define( 'AUTH_SALT',        '3pBIutDu])P+OqXf!EZzm0mjb3^wSxzH#0a=hm3bD]|]V!+%)}[zfE#Gt_ynrH*P' );
define( 'SECURE_AUTH_SALT', 'CeSp+Z 4:vDpTJ.KNjACy8K2;CAjA>&-3fD#qdeVe?yIZQz|-<#~*gdW+.BPR ?{' );
define( 'LOGGED_IN_SALT',   'Bc)9kqty=;R15o*_@lH2F>( >0eI|kPHJUMWOnZ4=%8)=a{CKNR,q0kWouZZ/t<$' );
define( 'NONCE_SALT',       'O|qyJIt|b_,&f&-` 5s_VOM0F<`d!;PK#6+F.yrT;d5/}?6$oS;,.`9,vk6ZaMcM' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
