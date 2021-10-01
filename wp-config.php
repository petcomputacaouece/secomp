<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursoemvideowp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':defNB2I60gv^po:,)/qb9;|UYy@*xJSRb{ud>;6F1Z]GZ5BwzA9f}O)=dvj<*;;' );
define( 'SECURE_AUTH_KEY',  'EyPNe]P6ig3 lBC%UAlC~v-R}HN9~mLR5@Gy|,*c&U`xPe[RyO?Jn)_*)EHmm`xV' );
define( 'LOGGED_IN_KEY',    '2lUU{:jL/`|-oj&dk)rD6Boj5|:=/&ppEpE^5(8_0Hcr^Bo~xbnpVT:k41WT>Ek_' );
define( 'NONCE_KEY',        ':q;8kq=~r$=b=z9Eew$D7qx wlkdyM2O#:WeTWUTf%q;u^$jMM+#8Ag{OiteCx[2' );
define( 'AUTH_SALT',        'fg]!+I#tj%^dmFoAeOlcIUqRmH1UK&;d&Fm.h@@Tx$<6k|6YpgQ$06FF+$!CyL+>' );
define( 'SECURE_AUTH_SALT', 'j4o7XsM/|2cNsV`4)F_O#on(KT!}nEX?Uaw`5qjcl8b~q}fZ[d8u98|BY=~7Cc8[' );
define( 'LOGGED_IN_SALT',   ')lwdj2h ElgpU0Er!mAdbC>>h~y%bUeCQy,MP=a}=QeelXMh~t;~:&3HeRkSYuz6' );
define( 'NONCE_SALT',       'vx(?1RXz~UUKt]RH2d_*~tez$fiZuL-T9Z5;q4pmHr$IWvS|44BKu:U%|]:_bV$l' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'csp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
