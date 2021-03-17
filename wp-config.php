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
define( 'DB_NAME', 'osvita' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Yw^`1T$,lh 5e`T{#D)pjAL8i(gUr}#vvtiXjB/M68`5A9nH7LpT{Q!>+lYjrtQB' );
define( 'SECURE_AUTH_KEY',  'ftZgDtMmc0;.pNTN=id(fG~;39vp+rX=UH/wYJi+~zfEyX/u9+M&(Ln@Vc8Ey}p4' );
define( 'LOGGED_IN_KEY',    'N:9UCq9%kdsfdf[l)*-6D.<#$3)(AK=ZHuS/%{j7YfpKk@1DsijaQOVo^uLr_&/f' );
define( 'NONCE_KEY',        '=&R/7w)j Jp|Vr2Qm$FO}C3{<}*gR.)K<m_GqdG8V%F:E]tv@fK:Kj?H9e6z|d!x' );
define( 'AUTH_SALT',        '*`-Wv;C1H~&4u[~?/L,OQ?vG+FL=RA8Eu)@%7_&pSxP*iuX([ &,yz=Vh9]Law2O' );
define( 'SECURE_AUTH_SALT', 'em1eF.8ezT8 Ux7RBrjXAuRuqkF5+MyTpR9+MFg[g72?Tb7=Zi.?CaMYagV5Rj$*' );
define( 'LOGGED_IN_SALT',   'a/9&iQAgj{z|tn]`09xm=D?J$Lf plCEZCu_B]Xx](?!m>]11m7cbz<4yCfI/A3;' );
define( 'NONCE_SALT',       'j07+L.49p|Dn-)xecKFO5;V3i~%c]=p5wWQ3;oSj/YkJxlW$!]{}mTCSd^^M/QK`' );

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
