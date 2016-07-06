<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpdb');
/** MySQL database username */
define('DB_USER', 'wpuser');
/** MySQL database password */
define('DB_PASSWORD', 'wppass');
/** MySQL hostname */
define('DB_HOST', 'db');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZV:LDpC-e7FxP*~L[rg0YWe.mG@-JE`UyT&{|JeFWcn`7Kr7D`,l<,}<!;.q0FQy');
define('SECURE_AUTH_KEY',  'L9z-]9c)MNCuvF2[anz{C+l/Gfe=G*I==aIC:D,wi;;*aw.O*#+wQx]1g:rwUbB6');
define('LOGGED_IN_KEY',    'mS6C$pj:fN1~oy13tDaVhyn]&>W,GPUMG3&.BFIMTE+-a<lg%1v7+ }+g|><KK3C');
define('NONCE_KEY',        'fR+v6qEYM3)njGIKz*^k-fB8=,-RB&5i|qwHeWg_f7gpXC0lA?z`X[+?D|3GJR5&');
define('AUTH_SALT',        '?P1pV2>RBrBpj|j^/>- S|pQ):|sXt]bU]s :HC|T+Mu|GQGf6RM_*wk%cA+|#Ch');
define('SECURE_AUTH_SALT', '@F:3d|^v33$7|4SG$M0Gg5P2-]?|2j%Zr:>czl/C_qT-[h3)-E_nkSj_]SfC^yH5');
define('LOGGED_IN_SALT',   'BN5-HK]#XM!3]}KMUB--D!%TmCQo?76*l5snlid+G}<-.`OokHk+`ZRzG3R+qm-s');
define('NONCE_SALT',       'iwUJMJyC^Xb}n@Aq$=5cYFzi3-bq^~)1oz!z+Or,N1+L+o6L7+Y4{Cw;^(Jbg/Gz');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', False);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
