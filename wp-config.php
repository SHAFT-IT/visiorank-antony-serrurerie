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
define('DB_NAME', 'c1363cd0f4f253');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'c1363cd0f4f253');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'AkWrR1t#');

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
define('AUTH_KEY',         '<$+ITaf7)K_z0Xy8CAsC>n;-NsKanXW?+Zpy4l:p1i$%RN&_AbrUCv588>9ovVtR');
define('SECURE_AUTH_KEY',  'k;U@}G&=D~1)cv[YJfwBHe?PIa^pvD}yUfOGGV4i08HoQ2%Xn)X,2IDh},H:</2%');
define('LOGGED_IN_KEY',    '&`+25rrh+K5uHH!Bc7NUha6K||,.q.3v)DCf64GeO-7jNC4r~?{>1](l|sUM`;5e');
define('NONCE_KEY',        '[|_(AY~7IK;<qqr^3/:ODLJ,K23S@-R9C9gjP&;Fx>yWUeoQ79aHbXw,gIh~$ml+');
define('AUTH_SALT',        'i6<M[d&J{|qvr*;A/,${dJN7o[!Wnn* bL!gM{xJT3b_./)q@`wB U{FTd<XO]z;');
define('SECURE_AUTH_SALT', 'Y5YbqWo=NIPz)Jbx;4&Z*/8B[t~i=b38{LM}fk3ZkmiI<*2XCl;Eo&g8YhSmP($3');
define('LOGGED_IN_SALT',   '8B8u<Qg6D~A-[N$Paw#(_:]{X2+r6%-4P5a}!Nbn:PK/l6aZB|A;T?PWHOg|H4zn');
define('NONCE_SALT',       '*z+7$~/Vzcn (O<]Zmo_iGs|rK?8<tv1vBb$h4g~l@hheQpj[q_p)/:P1d!p4] B');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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