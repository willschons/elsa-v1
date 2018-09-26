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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'elsav1');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'Wn;o]y3c!Pc>hr:MN>Z<!_xg)`tbu;8&W#g`/TjVWI@>H0GQ`5l<^_ SB^)`+qcw');
define('SECURE_AUTH_KEY',  'Ny`_8k0iH9#giY,8>K~jjACeiE[m*:gB>X=~z7hPws5Jw_:>9MZZ*L/3c(_9zl2{');
define('LOGGED_IN_KEY',    '(07&ubyT}RzOGc&rm4.orq(SF5%$}n>9,-)a!<9t4-SWE%5Y|hi*m{6$jO=br]Cz');
define('NONCE_KEY',        'isz{#Y6(#0Dv#oAp`I+-z{@>Ea@E|bH9Wfq,#-y dJ<*;xf|YEn4EBmU(}.va1xf');
define('AUTH_SALT',        's4?/=@MNsH)fn<uEl%7yB}2:xy?hfzYI0xaQqFK$<9EpLLswj@BS_UJUA*G =Wis');
define('SECURE_AUTH_SALT', '3#|@kB(nJl(SOMa7^dO.xsa/nnx3.!%,&wZ#IU^$X@#}5H9w~ VXRpXV8jGv0~jb');
define('LOGGED_IN_SALT',   '&D*AnFr#-|zms?tqO?ri[<zWvKwK[PHAeG[|VKDlt7pAyX`W_I}uVf|u*9<Df[A=');
define('NONCE_SALT',       '1p!bQzLKrz`!{>!/uWTI@L?h:Q]nLIHW+72x74CZneci/Qj)V[NHbmzOQ%x(D_ny');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
