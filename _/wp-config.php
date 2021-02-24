<?php
# Database Configuration
define( 'DB_NAME', 'wp_oldprodbackup' );
define( 'DB_USER', 'oldprodbackup' );
define( 'DB_PASSWORD', 'x0BGR530DnNWqj56qwpI' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'KrZ`4=`r!G[=&Y!k=jQ8Sl^Yvur<P{}6eA.c|0.CK&_qtOCr,KC3x&W|a60RFZ4y');
define('SECURE_AUTH_KEY',  'Ah8x}/kV`{[vo7^nHc2D{6Km:5(J?-3Z,i2M>O#DLq8DQ,y%i1he,5(!RKL&g1t/');
define('LOGGED_IN_KEY',    'ULYw|s]Q/p!x&YqZ>.(Q(h,fN)aNm{EI|&#:f7pd,UV;|Zo%)TX7e$4tvbOSUcN+');
define('NONCE_KEY',        '(aR=kgdFwy&(YGd^;jCB <KAK.]mpKdqESCAa|Q(~f oD[i$nh@m6[naUUb=pLvY');
define('AUTH_SALT',        'C=jHp&,<(;Z_a{7Vwr_QML#BV;J/]:_HX;r]@<_ay)CU]MWP;+-i~#3uRj$;EjJp');
define('SECURE_AUTH_SALT', '7Dzn?7B)vWmM`R6Xmp_%c:``2FT&t.M..SL#N8UC#c5e=-S WFISCO}fn/#-UTF@');
define('LOGGED_IN_SALT',   ',%+rRtrM-e.V:}ZmMQJi}>y`@i,g@lf_F[PmY^5RpHtX;G4+,5i^BtLpj5VuazWT');
define('NONCE_SALT',       'es{9lQHo:A(mQBgS!jB^;r/$[,jk/04/q-|6A<),zaVpMlljdBEJ$Qj5w_bR^9u`');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'oldprodbackup' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '6e81f13c937f5b2a2874b177ccf28d65c8e767ba' );

define( 'WPE_CLUSTER_ID', '100275' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'oldprodbackup.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100275', );

$wpe_special_ips=array ( 0 => '104.198.24.86', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
































































