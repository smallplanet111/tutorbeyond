<?php

set_time_limit(0);
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define('WP_HOME','http://localhost/tutorbeyond/');
define('WP_SITEURL','http://localhost/tutorbeyond/');
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
define('DB_NAME', 'tutorbeyond');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '|D;|,RFT5at;hQL?@*Gjz#.Qr35XVyd3V+}m<gCsR.+:&lA{>Dk|,*>,TDOUSQF|');
define('SECURE_AUTH_KEY',  'Br,8GFE`upQad_Z. D?Q5wgd3pVaV&?#HR3%8-.HFU?22`:C (:6{}c kA=79C}x');
define('LOGGED_IN_KEY',    'W%+3]Da/`@,]m1>F)~YYZ|ix:pN}c_KA.FQ~+;hPh,,]+5[val)>:R-|LazlC_]_');
define('NONCE_KEY',        '%7 |I] Euo6jyFP!R$Vyi@_TUC$8$i2DuBDPt3_Bia2JF3xKa[OECgDY73wB2~0#');
define('AUTH_SALT',        '/}!9JrXX3=n|,DD>Geg,d!wkqx#W:d=(9&*B_)o.H[HJ{5?`pRrp;Fg*bVan6>**');
define('SECURE_AUTH_SALT', '0=UEBNRfsdP_F; `_m.I-~rO:-mFWzcSKZg`XKOqlZpAhyuFst^r6wa|z/;_ZNji');
define('LOGGED_IN_SALT',   '_X+xcu9E9HVo7. ?rqn]{}cDC,rI{9KnU7SnkM+Y?HY,T[+`,=}_4I?fnv5rym+f');
define('NONCE_SALT',       '[p?Oh2[w:e!P3c+wI5^}0DZ@Yad^BW|H8p^:h9fT@u+U6=5FOfK:7S*-iuS>LYg|');

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




define('FS_METHOD','direct');
