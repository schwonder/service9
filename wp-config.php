<<<<<<< HEAD
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
define('DB_NAME', 'order_base');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+O?yi^6R-L<T4AqZ@-KjGlTsl+ye[QR7Ns4~#h.9>}y]h</}L~3*SO-4#W)agG1Y');
define('SECURE_AUTH_KEY',  'K#EI.#,U`Whf.F2MIVr(Z#3i6F,CLZnLl{s1u!MCE;ToDSg!BD::t,V`hAo6U#0:');
define('LOGGED_IN_KEY',    'Gd|23t=.?sizFW[vSm8W;6OFC&s`FVs+V=9*q]XU{{{ /}7<MmkXtG&B}U,c<:5x');
define('NONCE_KEY',        'U)<E&NT`T[GJBnJV)^M{4JWO;IQq`CHbIe9Jw,m+=:z@Z(Ls-U;yFNH[ BL&)>?=');
define('AUTH_SALT',        '72{;<7F&R^^;|sq%@puQ6bpttI0aWT<1qe|`UZ/n$,-#*/`HxF74@,lO`(oBjZYE');
define('SECURE_AUTH_SALT', 'GEL=Gv[!0!e:LiZlV<_bg4t2-M@u~$adQ9JjzpIYwx]F!)`w{c:L)f$je8u{TpC2');
define('LOGGED_IN_SALT',   '3j(CDGYywk1Nq.2tf 8Pz%#hx1fyrAzh;<(P^v*JK.^#Gbc%}K~K{$T7H_P>2|S]');
define('NONCE_SALT',       'JCKc8C5iO) *>oZfc4n+;)=FS^;;NXDXRk9KB2~^&l;;oZ&UMD4;PG?rq-h+8]Fg');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
=======
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
define('DB_NAME', 'order_base');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+O?yi^6R-L<T4AqZ@-KjGlTsl+ye[QR7Ns4~#h.9>}y]h</}L~3*SO-4#W)agG1Y');
define('SECURE_AUTH_KEY',  'K#EI.#,U`Whf.F2MIVr(Z#3i6F,CLZnLl{s1u!MCE;ToDSg!BD::t,V`hAo6U#0:');
define('LOGGED_IN_KEY',    'Gd|23t=.?sizFW[vSm8W;6OFC&s`FVs+V=9*q]XU{{{ /}7<MmkXtG&B}U,c<:5x');
define('NONCE_KEY',        'U)<E&NT`T[GJBnJV)^M{4JWO;IQq`CHbIe9Jw,m+=:z@Z(Ls-U;yFNH[ BL&)>?=');
define('AUTH_SALT',        '72{;<7F&R^^;|sq%@puQ6bpttI0aWT<1qe|`UZ/n$,-#*/`HxF74@,lO`(oBjZYE');
define('SECURE_AUTH_SALT', 'GEL=Gv[!0!e:LiZlV<_bg4t2-M@u~$adQ9JjzpIYwx]F!)`w{c:L)f$je8u{TpC2');
define('LOGGED_IN_SALT',   '3j(CDGYywk1Nq.2tf 8Pz%#hx1fyrAzh;<(P^v*JK.^#Gbc%}K~K{$T7H_P>2|S]');
define('NONCE_SALT',       'JCKc8C5iO) *>oZfc4n+;)=FS^;;NXDXRk9KB2~^&l;;oZ&UMD4;PG?rq-h+8]Fg');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
>>>>>>> origin/master
