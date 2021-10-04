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
define( 'DB_NAME', 'themewp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Lagant' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'be8Gp]e-YPV)h453' );

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
define( 'AUTH_KEY',         'EJPhc6cFh` Y56~?cC(fR%8i9*sA%/cZNXcFjoz!-lIs7i-yt;?+ V}6,490E6^W' );
define( 'SECURE_AUTH_KEY',  '`^`^mLuQX_8/XKjHn0G[7;u}&1rc:V(G7wb:>4oUAFQJcCa_,q=eap$pXoe2@mWR' );
define( 'LOGGED_IN_KEY',    '@(m2;Yq2S<#cV6mL8Qwd}ELUSKl:H]UslU1H69aqQe09 #yu|sN4If25@2o$MuWT' );
define( 'NONCE_KEY',        '}UN+t!hfW4@>g2>cXsUjgw7b!ZLefb3XK<&UwmIr*_bzhUq,8rYd%aRz{z8+Dxzv' );
define( 'AUTH_SALT',        'VF~XS%L6O#kti<5kg:p%M4sR4tRb7rhs3sQPw,}L5T~t8NFh5*~d-<{L?L-gTdH;' );
define( 'SECURE_AUTH_SALT', '7Oy(.90< QMam/2Dn5[zR#U$P(R^Q>+7>S!vD9(_%bm{Tp9Wu=`MI:es3>77+eY~' );
define( 'LOGGED_IN_SALT',   '>D*7#{/9!rMg%N/I2q:sRJbt81BPWzkT&be|C7}q][G-I}tdvYGAz(yK;<nSH/1$' );
define( 'NONCE_SALT',       '|siD:r2<Juk*DzzP]91Jw~Mgb&[)Au?sW|q/[_]XOJ2:U9oO,[h+@gKX:q8(L{k=' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp123_';

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
