<?php
class JConfig {
	public $offline = '0';
	public $offline_message = 'Este site está fora o ar para manutenção.<br />Tente novamente mais tarde.';
	public $display_offline_message = '1';
	public $offline_image = '';
	public $sitename = 'vieira';
	public $editor = 'tinymce';
	public $captcha = '0';
	public $list_limit = '20';
	public $access = '1';
	public $debug = '0';
	public $debug_lang = '0';
	public $dbtype = 'mysqli';
	public $host = 'localhost';
	public $user = 'root';
	public $password = '';
	public $db = 'joomla_vieira';
	public $dbprefix = 'joomla_';
	public $live_site = '';
	public $secret = 'SsmiJTBlyqsUBvGC';
	public $gzip = '0';
	public $error_reporting = 'default';
	public $helpurl = 'https://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';
	public $ftp_host = '';
	public $ftp_port = '';
	public $ftp_user = '';
	public $ftp_pass = '';
	public $ftp_root = '';
	public $ftp_enable = '0';
	public $offset = 'UTC';
	public $mailonline = '1';
	public $mailer = 'mail';
	public $mailfrom = 'grott.aurelio@gmail.com';
	public $fromname = 'vieira';
	public $sendmail = '/usr/sbin/sendmail';
	public $smtpauth = '0';
	public $smtpuser = '';
	public $smtppass = '';
	public $smtphost = 'localhost';
	public $smtpsecure = 'none';
	public $smtpport = '25';
	public $caching = '0';
	public $cache_handler = 'file';
	public $cachetime = '15';
	public $MetaDesc = 'descrição';
	public $MetaKeys = '';
	public $MetaTitle = '1';
	public $MetaAuthor = '1';
	public $MetaVersion = '0';
	public $robots = '';
	public $sef = '1';
	public $sef_rewrite = '0';
	public $sef_suffix = '0';
	public $unicodeslugs = '0';
	public $feed_limit = '10';
	public $log_path = 'C:\\wamp\\www\\vieira\\site/logs';
	public $tmp_path = 'C:\\wamp\\www\\vieira\\site/tmp';
	public $lifetime = '15';
	public $session_handler = 'database';
}