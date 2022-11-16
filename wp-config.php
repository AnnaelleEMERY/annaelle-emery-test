<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'annaelle-test' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Tam47koo.' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c2OOZMz0sLM5,NS9gRwvh,DBi`.&9}+h,W$&#{Fn`vM!Mq1EF$w:uAL1}~9YkhXk' );
define( 'SECURE_AUTH_KEY',  'g=RJzpra?,g^d~Bmf_2WZv@Y{$$I|yY>K b?F5*.+/PyPZwSf`[Z`sUM?$b*byx)' );
define( 'LOGGED_IN_KEY',    'y0:*52GL~ad#n:mqM6a=.ImNm19&@aj;W$0yu>s]$,sk7chJOW~Jrh|(5?6^>uZs' );
define( 'NONCE_KEY',        '?E3@4H_2DiHnrw7:&bFUN4jt`Y9EKwV>yBJ2_T8@lOU6sKu9@u2pEJ%Ce[jh.=p.' );
define( 'AUTH_SALT',        'u|_U+V/~XWPSRU9#;`S~Ncj5:5]B>Ef)lalaiW2+$!xF0%wJH@qCD#KE},1{Y}2[' );
define( 'SECURE_AUTH_SALT', '{x9q47I8$ktMee}[Q,@3@.)ah4}/F<ASU}Dz|~Q<+r?S{lAiR_)H epFUT)[;^gN' );
define( 'LOGGED_IN_SALT',   '!~kkC~C0)|g<U1&W?=pD:fdy#!uY#)IVa)EUnP{6@&7o$v^GO%6pcUgm1]mecYRM' );
define( 'NONCE_SALT',       'OHN,K:XhLv:-aaO657Nt^nbH,2EP..c:xmbO?FPnRcZL^jIKQpNP*+ECh8Q@)WJ)' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
