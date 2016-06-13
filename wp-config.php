<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'plait-il');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=(sg.sXo-/x$=6}E6L_BxPR3g5tUft_)]gGdip8Ty&$DblPiKlJog4!`h0G]r|c{');
define('SECURE_AUTH_KEY',  '8R3Vl-h&ToL1!31m.$B lrF:SrwO<tHJc^OZ?RTV<H+b*cc=qM=SNNmRwx8xovwF');
define('LOGGED_IN_KEY',    '/]P&=1bgq<u]#Q.q6-EbW>RY,sF%.jxY)>Z=qX/YA2pxe-bg5la6+<j]nH4z^K>Q');
define('NONCE_KEY',        '-uz73.$On=(8^tU1Kq;tQEV&[]cFktOk7nMsV$LMml#~ 8x}kG%+D_LlUS<STL<#');
define('AUTH_SALT',        'Kdj[F%=Qkc]x]! QLRq]eoF=1S5i;R@EvKwR?.WA*`}=4 m=kD=aB@?2[#)$wZWK');
define('SECURE_AUTH_SALT', '10;M|?%9@R.r`#OuIY0|=9 RxuGj}N;v=i:_Y9iQAbvY/l7>^:5wX-pTa6@{pqmM');
define('LOGGED_IN_SALT',   ';9xL>^wa:TL8cVH.ux~p1>EE&-_s2XfTt94^:v*HU%ACY$&R#byy+fQG:<~rHPT[');
define('NONCE_SALT',       '(B*|+~VU8`eF=$0woi1HX9Q%kA} 8I0dJe#[#w_C%pv*<.@kvCr*Ht@,9,Xz,P2q');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');