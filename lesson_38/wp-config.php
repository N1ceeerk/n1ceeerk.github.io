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
define( 'DB_NAME', 'lesson38' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1234567890' );

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
define( 'AUTH_KEY',         'FD4kUFA.M>F)/g16<;+D/)xF1(d%]O%lB>$KHpI{A$<Eq(U4^Z@Qm}tJU )Splg6' );
define( 'SECURE_AUTH_KEY',  '>)}GNJRz;Zd26j6e[b_0a!H/(!kgED)rP<tE/ebtlq1|UDfZRWypY7iccr[i0b65' );
define( 'LOGGED_IN_KEY',    'ka&q$*{RThe62fNcyv3%&U+0H=h>U>Vx5y`y>WqE2#5O[H2jnH0,ZWxe 8oiSWh`' );
define( 'NONCE_KEY',        ':{L@)4kW~,sI[XvPzMsPc%|FHs/MHPk{Bx_2Dx34h}&dAUG7B I@DB6h-N;)@X7:' );
define( 'AUTH_SALT',        'fQR,5:b4THiu_S6l=oDmH5|(=DdHbS7roD`4LsRO~Os=ng%AQS bt45hQkk-<mh&' );
define( 'SECURE_AUTH_SALT', 'dJ<o~!~t%prUajr)-cSF%V5Ms@YFw5N1{N`v&c<XX9c,V:(/)w)-@o{2048Gy&w!' );
define( 'LOGGED_IN_SALT',   'e^ERJzKI+CqM,`[U._;@]3eoJa/%}?RbM[ZWQ_J~p;McX>c_2j>0tSlq sgfRmq%' );
define( 'NONCE_SALT',       'KL.Mqw`YQ9*W`mYfvaM84uC.l*pf?X,G1,UueB=jK>ToTQV69db!Um$bzrOx*+I3' );

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
