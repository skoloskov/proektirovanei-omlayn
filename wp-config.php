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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/c68435/xn--80adicmck1addgme0a.xn--80asehdb/www/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'c68435_xn__80adicmck1addgme0a_xn' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'c68435_xn__80adicmck1addgme0a_xn' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'XiTgeZaxtofij74' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '+AU%/%lUQtg3)b@E?sFSDjx.Q9gK#7ZY&ekosIJ3Tt6b!,{1kJ*$]+2ppF&1<UKk' );
define( 'SECURE_AUTH_KEY',  '+w_q|m99J]2n3R^DF5|;W j=`E@kOt5U-Km~Y:YRfC0<Sb8~UMd]qR4k.U`o2eoj' );
define( 'LOGGED_IN_KEY',    '(|UD4K=}m +q5Qf-tzS!2R#mnXz4W)20PL;wA_k0dJ}VP++*z>jf[M&,@]YA|275' );
define( 'NONCE_KEY',        '?Jq_rVx]VmFaSx4+i1oQWmw4YNpfPtBIQpiT7fR6J}O&V*J2YJ^(Of;5X#*+bXXD' );
define( 'AUTH_SALT',        '(&>S.bisf7:,yI6z=`:UBiV1Zl%z6@}0.ipv|Tq9QfG0`&K#~rX~D]:7c4tXJg$h' );
define( 'SECURE_AUTH_SALT', 'J/djYfS-wUyFsjB_>>GimTaZIfY8UwwtUko>n| 3fjopBFI@*1J6?1v:#cVx1=h+' );
define( 'LOGGED_IN_SALT',   '*<dg$*9T^!Ke&S/h{V4j[C#Re}kOQb<EnG919pz+=QgnHjFK%Bga5/1L%R>@5xvz' );
define( 'NONCE_SALT',       'L6J@x:z+@JAC86/b0{(I66&oD4(liuSA{,[6&ZR5=@O!4;YdIRw,,M[8TOErDNam' );

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

define( 'WP_ALLOW_MULTISITE', false );

define( 'MULTISITE', false );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'xn--80adicmck1addgme0a.xn--80asehdb' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
