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
define( 'DB_NAME', 'bhx20547_jc' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'bhx20547_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Afc3fa3A11FA' );

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
define( 'AUTH_KEY',         '1g.*)!|$3&YG a(#9Rp]v?4A^0u(<6@4VIaD4>{DA1P&[,y%/En V>lT|`r= 7_z' );
define( 'SECURE_AUTH_KEY',  'j7@i,uUd,o8gVl1<S=}VXERTGuSnKqAYr#-95x(nAWk[2Zd-*Xl{Duy~Oe?}8_!e' );
define( 'LOGGED_IN_KEY',    'Ra[+/=vnUiI;pH3m*6_L|Ls,` fhH6*]WzyvqtO~ <;C&lK.DCbK-gO$c)$-*Y3q' );
define( 'NONCE_KEY',        '<[ZDw[eG?twP+a2X*Ns0FY/*bzMJp2+B&[I?GlPqy7>gix-N,Q[2B/%*{cPtO+/=' );
define( 'AUTH_SALT',        '?#B9:vdbKxB?];*V _$drpQj.TJ(dGW50Eb&NH7#Sp=l.p%0}t>:o@r^~`xgXq|f' );
define( 'SECURE_AUTH_SALT', 'T`m&*FH4|Zo-17O qe32{5BS8k3j~n0(Irv+xzyHtXA8VTa1m7Y>)S3Kbv%>R,Dc' );
define( 'LOGGED_IN_SALT',   'P<UBAKfqT](.TP$*3pVx/(*1?63(Q5GwW;3PsxFCo5>1QJ8xh!?NYR(LTX{{mE7T' );
define( 'NONCE_SALT',       '$`u*g6Ioi/NSkG[N+1SS1Sa6}|(?%Y@qn0l9KI9$zv9bKhAIaEoPQXaleLy, pL{' );

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
