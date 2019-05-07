<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'semalt_wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dXkr=g]#DJ]]{7UOeE_=Jx<9 ScuFD5`v>Au228|P_cwq9tJK&#K5txxAvMs@>5S' );
define( 'SECURE_AUTH_KEY',  '5vpg2L;uk)B_!D0IZ&rmo_iA(kAr_K_<V)!OXXRf@b+gj!@)=G0*zP|-WF:gJwDU' );
define( 'LOGGED_IN_KEY',    'ch:g[v`ea&E=2$T^!JgnyE|7u|3pS=O>sVfAEk`U[GbJA3tU,e)dRF.J)x @|FqB' );
define( 'NONCE_KEY',        'uBWl(lcN;L{A&D4!}r$d07^b5WOj*~LM)X7!@,T({JL,SdVBbL!GIp35?#-y1r<m' );
define( 'AUTH_SALT',        'p0;>RZ`;LJ3$hGN!:}lW{TkxWX>e)>qOG~LPc/Iv}AT$t;1]l[UcdU1c#V7NF9J=' );
define( 'SECURE_AUTH_SALT', 'FJ-+oNS]:Ez6t3l_X,/9nFu~~2)BZn;1w(1P2db+ oMm6*Jnh6tp%8Wbi<4XlViw' );
define( 'LOGGED_IN_SALT',   'pOs_?8L=OcbWPi9QD*n(E8<K[vE;iCt4)5GgkpPg-Sl.sF08iQGPo.[Rt)!o3K3(' );
define( 'NONCE_SALT',       '9&@SQki9IgbPsb1<Rg,PD4wt]dvI{3URaY#l*Tyw~eadKzi,.@s5^0X5y]a_G!W|' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
