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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'polymer' );

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
define( 'AUTH_KEY',         '*AY&uPc47J y,+HdDsUoI[OR:~%2@a|XFMz?Ac9Xu[(&js9q[xIuRm ;tu`AtN<g' );
define( 'SECURE_AUTH_KEY',  '#WT7Te~/e&KI_ak5j~E6|&[Y;IUt}kkjw!d:TR~Ep>-zbnC1%Zf/J+4>Mk)r1X&/' );
define( 'LOGGED_IN_KEY',    'h=*&c}0Y~.I^+HNrXYAQ5Qz(n}>SXI1?j[Q>KnjHIl#m|_JcnXeJxiadH^nQ&}UL' );
define( 'NONCE_KEY',        '/U>/8]|A>>UCI]NdH$]QkKK*=Cmmp2OYTTx^>ZM?.a<2$NS)R$|3_rRoVw||4n:<' );
define( 'AUTH_SALT',        'U3]bX:Oj7*G`wBUJ3N}V-<EYk{TjDfC[:wRSod.I9jkyZ0?_/eTuvH1yZ5!p?=&m' );
define( 'SECURE_AUTH_SALT', '~ZPU/RGY0;71fFzAdn8_C|`Yat_:_(|$1$,zrXQn1kdBHm53!2fx[D<_a(ihU~A_' );
define( 'LOGGED_IN_SALT',   'm@;OqAs(!CWALphYxe9dIDC )Z*!cz5`G#KSe`-w-q4Mnx-m:n* d[ft^`29&?F]' );
define( 'NONCE_SALT',       '^.GreS0Lbu;V$7UNt^sRf<F{`~RDiZ?C1c4!|/^Yp&r1M{h7h*;VrPV7~N`k#1;g' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
