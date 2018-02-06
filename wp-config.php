<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'sanishop');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e(+2=_~z[a?0.! C/A:wK,(Mc) &L ij;t-x2 fSP#q>R`JITVbijG]Y=9nPEX)8');
define('SECURE_AUTH_KEY',  'Xi[@q2@n+vfaK<sK|+E=lE/QP8-o;jKXMBVs@PJ?Vpl,q)+l&9B)gJQlHo_G{{WI');
define('LOGGED_IN_KEY',    '}flICKw*yl-SNAOT3bvB(W(a8v}|#GjpNp9LAsD!t+T%Kthxigc@9,>Z;Ve_ItjM');
define('NONCE_KEY',        'ZKy8AN[DHbXpt-@``Rtp WGAmGX`<DEn[ci=u;:3n[R{6GdkNSXy-(EFT0CbF5#J');
define('AUTH_SALT',        '`=W8@*b[SDVpUk#t}1qYr~SzUjX)MQ{3$yt7UFU0}U_|@mY^lCbl2(2tNH_JE6$A');
define('SECURE_AUTH_SALT', ' `Ua9}`AnR3}$k:=#<RK)Kh|RrC;wRWk*8`abH 3Y2c]Xs!G)Qi!4Qi5w{4b;N(5');
define('LOGGED_IN_SALT',   ',|A)Os..!s!aPDt6M%&o5#Xm.exK9b)$jjX>et-DW)*e`d;TrAFzJA7;THGH{^;t');
define('NONCE_SALT',       '+d:0x`;:5]tS[IvkT-ftynn=?j&8h:Rbf{2CGUbro{b I=!bb!6Qrt^71-60H/X}');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'sani_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');