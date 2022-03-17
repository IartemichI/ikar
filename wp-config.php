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
 * * Настройки MySQL
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
define( 'DB_NAME', 'ikar.local' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'ikar.local' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'ikar.local' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'VO|;h0&qV.y{kk3y)3bSNC.Kl rxoEOr&ob*Aw2e+5uZveSo}d:O=,6O4QbtOdWY' );
define( 'SECURE_AUTH_KEY',  '0R_B|`s<%PZ6!U ,B~}/a@iRSV&[RuT8[UbTH*?kVd^ H[7gt-KYMpI$<isJfK:0' );
define( 'LOGGED_IN_KEY',    'XxO:Cdi:c<#MRFXQCms+gNcbX!@LEI(NtPC6-9jC4F P0yQu$`.g>3^s%xK~LfH5' );
define( 'NONCE_KEY',        'M5jRFc$/p:U6%|n@lhr8,FH)auD2>I0cwo0x8RvD%S9|s6R(Y},O[Yc8F(9tFqS~' );
define( 'AUTH_SALT',        '-?3}G/rgXI:2^)-_/})U9<]?x*KS,VkyCs _;b8y|?DJnM=&H8T[jYV5:;jid85,' );
define( 'SECURE_AUTH_SALT', 'a|~BrN-Vn+ot7,4 o3gcFi#v.!$2V~M7C52]Xfg*3-,>sgQ,yrQ4j<quf0]y,a]L' );
define( 'LOGGED_IN_SALT',   '7-r?2FVL tZrBMr?EQ&C[zfDp46x50dk}eOB|t$l3)b/yDS8#Fu- -Hpf>oL,om)' );
define( 'NONCE_SALT',       '3j0ES](3t.K@wdSPa@o>SBl~-D}w[_DPPh1#G,/_C@/$p2Raw,i=oHSK,^B3xOqe' );

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
