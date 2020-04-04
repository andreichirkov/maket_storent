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
define( 'DB_NAME', 'maket' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'maket_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Privet123?' );

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
define( 'AUTH_KEY',         '1k4j<D/o =?5ajh}pqD}%UdeH:3G^=,1wpC7tEQ[9QW{LI}krrtco)9i&EuhoV:[' );
define( 'SECURE_AUTH_KEY',  '3iY>e;HwWRH+HkE?g;tnGo9)]EFjM}c7Go;ReFd^,bbu+Q6aSlh!dfm[VPg?cSxn' );
define( 'LOGGED_IN_KEY',    'V.6f;k@<m3&fL=2z%xmc}hLRM[_-7{yaf7)YmT(6c|}|,EqqC3_0@R_%7`C0X%/L' );
define( 'NONCE_KEY',        'A>>|emL!qzZPG20PcFX :9oUl0r|W>tV4OId O.L:Ge%;Ei^$d(xV` |JIW. VSX' );
define( 'AUTH_SALT',        '}U`<D7MGs?Fu6rUW(pOJFiZ(cI%$8? FWr8C{$@|O]5:rWduYwnz>q.U011m1+~C' );
define( 'SECURE_AUTH_SALT', 'kTaaa[_C>)6,=xX]LH37{lSs}*[<_7G,g/0:j-+2%Yw4k-UwI+D@d@KN@)q5@p,@' );
define( 'LOGGED_IN_SALT',   'fg|+}A@5zC]E^?[-9e?Mk@3~>r||.6u,{//>{D(BsE}9r4Quto=r-Gtlj^dFY2Jh' );
define( 'NONCE_SALT',       'm~.pwv4R1o|`v.u`dU>vLL_Q8j?VE>hB<`xlDX%<-H5I=qq.CWa9DfCT/.*JtasU' );

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
