<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'IceCream' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', '127.0.0.1' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y3uJY&vFt}F2Xv0T@]eC%D*IeG)|ir]Vec6xe0[/W>a^T6)!@~5oor^b7%WNn7I~' );
define( 'SECURE_AUTH_KEY',  'f_3nJ0jg`rJat^lW`5&k=W(SXSRg[SPbN$/qNsXJu..zA/R.EIro/Vh/9[sD{0,v' );
define( 'LOGGED_IN_KEY',    'z,XcEXykL_iRw;;(B7gG>BI-xRp);eBl>py@=T.SEV#Q~iSF4CpzWC^fAW(lz({4' );
define( 'NONCE_KEY',        'RpOU=!sqgBa/`4,8yif{khY6%OUFPq,5?~jdHss?L:oWUIOX6]ax`2u<;IN1P#|7' );
define( 'AUTH_SALT',        '(6r5;ZJQnV.Dao&L~ i5onZqO(H)AOh!vO.:&s[sD/?=@<hLD?|gv>Al1EFAOmn ' );
define( 'SECURE_AUTH_SALT', '/p0NkCXrHd.*oJ4C$~}[Z5Z:-7qd[*%3-;wcY<A{;?xs-7+ y1#42V.%k[lvW^d*' );
define( 'LOGGED_IN_SALT',   '~xef}@-^MG !@Q5%S2, bF}krh/:ahxN@<EK7t6}2 d`i+Bb,/RQ>dlq-f&6SM7*' );
define( 'NONCE_SALT',       'uxT9~TQL@lKk L>W#T#)7g:EnCTS/N54*5b#!reQ[baQUh*pCONq%6CBO`8- f c' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
