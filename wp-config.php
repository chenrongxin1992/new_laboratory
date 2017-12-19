<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress_test');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'A_Diffcult_Password_0704');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']/%>cxK*fSD]0Jjfh$H)W*a*a 19TS!5DPE(H:UjV+6CQFxMR];DaAjO$ eyk70%');
define('SECURE_AUTH_KEY',  'S/p_Il4EwktKNoDN8p0,/_Iu6=RMHUb*iBD{AaaYmh~HqCT 4}]%x=hI.G!@tgii');
define('LOGGED_IN_KEY',    '*Gm[S!;?8eN89Au+XS*ZFmi4fA4!Sy|v*URK?gwP&me8:QZKH?+;TcJcj~xcgnhq');
define('NONCE_KEY',        '<K|Q5=3<yhS#6-F1H?l#Stq;Hm=hE<3K<8:D6<bcy]p4OqPc*579K;[R!Ny`)u{~');
define('AUTH_SALT',        'Lo4]J)ieR1_m<E[a<!DqksRNJ|iP|LA<JVp{IZXad_aYU&kXZ{PGl _q2Yg+w8q=');
define('SECURE_AUTH_SALT', 'e=UKv[g=yeX^jA]jImyD;5E$_3]S8p5g>ny5woQlJxHD )>HR,pn~vZNWp|H*XaT');
define('LOGGED_IN_SALT',   '5.Uq@,RTG%b!N?8ff2vTiL,@Ag;X1xLYxrpn/KavJAT~-u1M{sl ?FGwj}^77+Nn');
define('NONCE_SALT',       'Gl^x3[?m~+)[~aCRAhu48R4TB+vG% 3: zbvHK2G3:PU3eV4^THvOf@.!:gpF8~r');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
