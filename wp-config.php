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
define('DB_NAME', 'carried_away');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '- >$.yI8Dv|R%9s-5@AZ;dT3k,R7z|Wt?6JD4+wN,5.+>$-yS#.wyT.7+^tk(mTy');
define('SECURE_AUTH_KEY',  'if`rA;qZiT_vP[4yDb+iwiA+L8K<5+c,5ov#]&buJ-*~p<f_TO+r+-Ux#<O-, u]');
define('LOGGED_IN_KEY',    'm_EduyXN+O.u2~zC |Tkfz-ZOtrH,5_DYp9;&{-6dTX6 tlb4f7TUT*w+%Iq+{K3');
define('NONCE_KEY',        '?Ol]&~9o{E4YyTG[34I_NYm;>$!2?N8{$/>}Q8bvXV<hf_dF}PcRx|^Jn/!}kd]i');
define('AUTH_SALT',        '+<Vlt$)5krS{>c:5PT;s.DDqO7}EeRrBY{`=,xF2EFCl#./VjN,ZqPw#6pdzg[O&');
define('SECURE_AUTH_SALT', '^Qm4d+s1|h&R-:5m}bS-&G}LqX+JMI0Ch6Y|c,&;8s};|Q+_-+FnHFphi+x-jnDz');
define('LOGGED_IN_SALT',   'qAGKuJEMKT-=ODWHQ-5JbLA<12~Z_}smqk`-j<w>]rkn>2S=wcF$(kVMJM+&x5lp');
define('NONCE_SALT',       'a(P~|8xHaRR&Ds]}<! x/;RtR-dUV#=)v(M10iPVlDF 5kfk+wt&[`w|T%!aOHE8');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
