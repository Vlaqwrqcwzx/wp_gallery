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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'UKeZ,9`a,WSa#<dsR/h@K3!a;} oQsU1AL`XxiIt$T/cxx%yH-DK${D-%eQy2=Rm');
define('SECURE_AUTH_KEY',  'KVeHQ5,:1M#@es9RS82;7c`(%>F=,[-*$Tg@V$eu_b)7Es7+<n~eRSev$u$PWW*=');
define('LOGGED_IN_KEY',    'CqMs!m5{/Us/<hev$c7]u>`Kn:1l7ii>GrNG|iU4 &xsKYDh:C10.ElNmg9o7Y-F');
define('NONCE_KEY',        ':YPy%trIFVxw_+0^$a|V3#Fb/>uk8`B O*VCoAm0wEPX~EPSWLs7SH7C+Xut%:2X');
define('AUTH_SALT',        '?+es rd?=y2E?!+zS!g$KZDV!5/DB~<-nr=E^|cvPK@p1Nh2*,EG7D-D<b5NHCNS');
define('SECURE_AUTH_SALT', 'x6vkz&Bq%BKnr[=/$@xv+9T4:tue[L2TUUg)wl61&/;m^7X?>Em9h:,g;Rc+V vu');
define('LOGGED_IN_SALT',   'Ae:ySr?+^By/va<|%^R40m`BqbAz7&_v[]~g@!j,y3>:ei.wXXxJAwP[s@Dbr`uy');
define('NONCE_SALT',       '4k.Hw!t4o:D,J:&+u!H7x9`xZH,^dWo]K3R01?7UfJSt!G0+L>d4*VRlZYF&?6ZV');

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
