<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'gitpress_db' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'root' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j$^]aPs+{8Z*xtVpPSsdg8)iUOb)Fi~YE!]`nyR[:*[~lh6W9(zP/mv>$$W#]xnw' );
define( 'SECURE_AUTH_KEY',  '{]1u2cmgc8Y)[o(8gs-w$E>u:`ITW_S2dM[?5R/cF99}_{-#WKxFcPYgsu;5-s8n' );
define( 'LOGGED_IN_KEY',    'u9E@b)V<{V$^%-G7D!/15Y;:s)0E~_&es>B;ED&cA2*!9q`!m*/[,w;JFBJC3w#J' );
define( 'NONCE_KEY',        '>#<w7u?zFsl+MBy=uPCfSfr*6Tx?B0#X$xLa$;c1 Srx,y36iMLZ=yS&g@vQ|RIz' );
define( 'AUTH_SALT',        'F SQEE7C6Qp)4a5EK.-%Vi5)^sC`5}3qVt@bbjiZGKC6(~gQbtO?1ACulBz<HUhH' );
define( 'SECURE_AUTH_SALT', 'Sd:L;tUL!CgtKmnB.D@[MW&4ucXR09E=v-9T;L7YK~CD-q@h*8y6G0M%%Z% &%9r' );
define( 'LOGGED_IN_SALT',   '.?U&%)v-bJ4ts]Q!vNp6$*mD0Jx2D-7N5wS%TsqiWI@sCD*c/-FxbUg$6?o/}J^o' );
define( 'NONCE_SALT',       '3,1u,4])>d%B^o;g2OnA{eyF7lJ$oXrM_rIEd`dQ[N.k2,lOyIE_%PEjk-w$>O1G' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
