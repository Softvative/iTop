<?php

/**
 *
 * Configuration file, generated for the unit tests
 *
 *
 *
 */
$MySettings = array(

	// access_message: Message displayed to the users when there is any access restriction
	//	default: 'iTop is temporarily frozen, please wait... (the admin team)'
	'access_message' => 'iTop is temporarily frozen, please wait... (the admin team)',

	// access_mode: Access mode: ACCESS_READONLY = 0, ACCESS_ADMIN_WRITE = 2, ACCESS_FULL = 3
	//	default: 3
	'access_mode' => 3,

	'allowed_login_types' => 'form|external|basic',

	// apc_cache.enabled: If set, the APC cache is allowed (the PHP extension must also be active)
	//	default: true
	'apc_cache.enabled' => true,

	// apc_cache.query_ttl: Time to live set in APC for the prepared queries (seconds - 0 means no timeout)
	//	default: 3600
	'apc_cache.query_ttl' => 3600,

	// app_root_url: Root URL used for navigating within the application, or from an email to the application (you can put $SERVER_NAME$ as a placeholder for the server's name)
	//	default: ''
	'app_root_url' => 'http://%server(SERVER_NAME)?:localhost%/itop/iTop/',

	// buttons_position: Position of the forms buttons: bottom | top | both
	//	default: 'both'
	'buttons_position' => 'both',

	// cas_include_path: The path where to find the phpCAS library
	//	default: '/usr/share/php'
	'cas_include_path' => '/usr/share/php',

	// cron_max_execution_time: Duration (seconds) of the page cron.php, must be shorter than php setting max_execution_time and shorter than the web server response timeout
	//	default: 600
	'cron_max_execution_time' => 600,

	// csv_file_default_charset: Character set used by default for downloading and uploading data as a CSV file. Warning: it is case sensitive (uppercase is preferable).
	//	default: 'ISO-8859-1'
	'csv_file_default_charset' => 'ISO-8859-1',

	'csv_import_charsets' => array (
	),

	// csv_import_history_display: Display the history tab in the import wizard
	//	default: false
	'csv_import_history_display' => false,

	// date_and_time_format: Format for date and time display (per language)
	//	default: array (
	//		  'default' =>
	//		  array (
	//		    'date' => 'Y-m-d',
	//		    'time' => 'H:i:s',
	//		    'date_time' => '$date $time',
	//		  ),
	//		)
	'date_and_time_format' => array('default' => array('date' => 'Y-m-d', 'time' => 'H:i:s', 'date_time' => '$date $time')),

	'db_host' => '%env(DB_HOST)?:localhost%',

	'db_name' => '%env(DB_NAME)?:itop%',

	'db_pwd' => '%env(DB_PWD)%',

	'db_subname' => '%env(DB_SUBNAME)?:%',

	'db_user' => '%env(DB_USER)?:%',

	// deadline_format: The format used for displaying "deadline" attributes: any string with the following placeholders: $date$, $difference$
	//	default: '$difference$'
	'deadline_format' => '$difference$',

	'default_language' => 'EN US',

	// email_asynchronous: If set, the emails are sent off line, which requires cron.php to be activated. Exception: some features like the email test utility will force the serialized mode
	//	default: false
	'email_asynchronous' => false,

	// email_default_sender_address: Default address provided in the email from header field.
	//	default: ''
	'email_default_sender_address' => '',

	// email_default_sender_label: Default label provided in the email from header field.
	//	default: ''
	'email_default_sender_label' => '',

	// email_transport: Mean to send emails: PHPMail (uses the function mail()) or SMTP (implements the client protocol)
	//	default: 'PHPMail'
	'email_transport' => 'PHPMail',

	// email_transport_smtp.host: host name or IP address (optional)
	//	default: 'localhost'
	'email_transport_smtp.host' => '%env(SMTP_HOST)?:localhost%',

	// email_transport_smtp.password: Authentication password (optional)
	//	default: ''
	'email_transport_smtp.password' => '%env(SMTP_PWD)?:%',

	// email_transport_smtp.username: Authentication user (optional)
	//	default: ''
	'email_transport_smtp.username' => '%env(SMTP_USER)?:%',

	// email_validation_pattern: Regular expression to validate/detect the format of an eMail address
	//	default: '[a-zA-Z0-9._&\'-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z0-9-]{2,}'
	'email_validation_pattern' => '[a-zA-Z0-9._&\'-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z0-9-]{2,}',

	'encryption_key' => '8de353e765ce9460e9dd1d45c354a69bb27f6f94f3fb8f9af2c0998ace085400',

	'encryption_library' => 'Sodium',

	// expression_cache_enabled: If set, DBSearch will use cache for query expression generation
	//	default: true
	'expression_cache_enabled' => true,

	'ext_auth_variable' => '$_SERVER[\'REMOTE_USER\']',

	'fast_reload_interval' => '60',

	// graphviz_path: Path to the Graphviz "dot" executable for graphing objects lifecycle
	//	default: '/usr/bin/dot'
	'graphviz_path' => '/usr/bin/dot',

	// high_cardinality_classes: List of classes with high cardinality (Force manual submit of search)
	//	default: array (
	//		)
	'high_cardinality_classes' => array(),

	// inline_image_max_display_width: The maximum width (in pixels) when displaying images inside an HTML formatted attribute. Images will be displayed using this this maximum width.
	//	default: '250'
	'inline_image_max_display_width' => 250,

	// inline_image_max_storage_width: The maximum width (in pixels) when uploading images to be used inside an HTML formatted attribute. Images larger than the given size will be downsampled before storing them in the database.
	//	default: '1600'
	'inline_image_max_storage_width' => 1600,

	// link_set_attribute_qualifier: Link set from string: attribute qualifier (encloses both the attcode and the value)
	//	default: '\''
	'link_set_attribute_qualifier' => '\'',

	// link_set_attribute_separator: Link set from string: attribute separator
	//	default: ';'
	'link_set_attribute_separator' => ';',

	// link_set_item_separator: Link set from string: line separator
	//	default: '|'
	'link_set_item_separator' => '|',

	// link_set_value_separator: Link set from string: value separator (between the attcode and the value itself
	//	default: ':'
	'link_set_value_separator' => ':',

	'log_global' => true,

	'log_issue' => true,

	// log_level_min: Optional min log level per channel
	//	default: ''
	'log_level_min' => '',

	'log_notification' => true,

	'log_web_service' => true,

	// login_debug: Activate the login FSM debug
	//	default: false
	'login_debug' => false,

	// max_combo_length: The maximum number of elements in a drop-down list. If more then an autocomplete will be used
	//	default: 50
	'max_combo_length' => 50,

	'max_display_limit' => '15',

	// max_linkset_output: Maximum number of items shown when getting a list of related items in an email, using the form $this->some_list$. 0 means no limit.
	//	default: 100
	'max_linkset_output' => 100,

	'min_display_limit' => '10',

	// online_help: Hyperlink to the online-help web page
	//	default: 'http://www.combodo.com/itop-help'
	'online_help' => 'http://www.combodo.com/itop-help',

	// optimize_requests_for_join_count: Optimize request joins to minimize the count (default is true, try to set it to false in case of performance issues)
	//	default: true
	'optimize_requests_for_join_count' => true,

	// php_path: Path to the php executable in CLI mode
	//	default: 'php'
	'php_path' => 'php',

	// portal_tickets: CSV list of classes supported in the portal
	//	default: 'UserRequest'
	'portal_tickets' => 'UserRequest',

	// query_cache_enabled: If set, DBSearch will use cache for query generation
	//	default: true
	'query_cache_enabled' => true,

	// search_manual_submit: Force manual submit of search all requests
	//	default: false
	'search_manual_submit' => false,

	'secure_connection_required' => false,

	// session_name: The name of the cookie used to store the PHP session id
	//	default: 'iTop'
	'session_name' => 'iTop',

	// shortcut_actions: Actions that are available as direct buttons next to the "Actions" menu
	//	default: 'UI:Menu:Modify,UI:Menu:New'
	'shortcut_actions' => 'UI:Menu:Modify,UI:Menu:New',

	// source_dir: Source directory for the datamodel files. (which gets compiled to env-production).
	//	default: ''
	'source_dir' => 'datamodels/2.x/',

	'standard_reload_interval' => '300',

	// synchro_trace: Synchronization details: none, display, save (includes 'display')
	//	default: 'none'
	'synchro_trace' => 'none',

	// tag_set_item_separator: Tag set from string: tag label separator
	//	default: '|'
	'tag_set_item_separator' => '|',

	// timezone: Timezone (reference: http://php.net/manual/en/timezones.php). If empty, it will be left unchanged and MUST be explicitly configured in PHP
	//	default: 'Europe/Paris'
	'timezone' => 'Europe/Paris',

	// tracking_level_linked_set_default: Default tracking level if not explicitly set at the attribute level, for AttributeLinkedSet (defaults to NONE in case of a fresh install, LIST otherwise - this to preserve backward compatibility while upgrading from a version older than 2.0.3 - see TRAC #936)
	//	default: 1
	'tracking_level_linked_set_default' => 1,

	// url_validation_pattern: Regular expression to validate/detect the format of an URL (URL attributes and Wiki formatting for Text attributes)
	//	default: '(https?|ftp)\\://([a-zA-Z0-9+!*(),;?&=\\$_.-]+(\\:[a-zA-Z0-9+!*(),;?&=\\$_.-]+)?@)?([a-zA-Z0-9-.]{3,})(\\:[0-9]{2,5})?(/([a-zA-Z0-9%+\\$_-]\\.?)+)*/?(\\?[a-zA-Z+&\\$_.-][a-zA-Z0-9;:[\\]@&%=+/\\$_.-]*)?(#[a-zA-Z_.-][a-zA-Z0-9+\\$_.-]*)?'
	'url_validation_pattern' => '(https?|ftp)\\://([a-zA-Z0-9+!*(),;?&=\\$_.-]+(\\:[a-zA-Z0-9+!*(),;?&=\\$_.-]+)?@)?([a-zA-Z0-9-.]{3,})(\\:[0-9]{2,5})?(/([a-zA-Z0-9%+\\$_-]\\.?)+)*/?(\\?[a-zA-Z+&\\$_.-][a-zA-Z0-9;:[\\]@&%=+/\\$_.-]*)?(#[a-zA-Z_.-][a-zA-Z0-9+\\$_.-]*)?',

	// use_legacy_dbsearch: If set, DBSearch will use legacy SQL query generation
	//	default: false
	'use_legacy_dbsearch' => false,
);

/**
 *
 * Modules specific settings
 *
 */
$MyModuleSettings = array(
	'authent-local' => array (
	),
	'itop-hub-connector' => array (
		'url' => 'https://www.integration.francfort.itophub.io',
	),
	'authent-cas' => array (
		'cas_debug' => false,
		'cas_host' => '',
		'cas_port' => '',
		'cas_context' => '',
		'cas_version' => '',
	),
	'authent-ldap' => array (
		'host' => 'localhost',
		'port' => 389,
		'default_user' => '',
		'default_pwd' => '',
		'base_dn' => 'dc=yourcompany,dc=com',
		'user_query' => '(&(uid=%1$s)(inetuserstatus=ACTIVE))',
		'options' => array (
			17 => 3,
			8 => 0,
		),
		'start_tls' => false,
		'debug' => false,
	),
	'itop-attachments' => array (
		'allowed_classes' => array (
			0 => 'Ticket',
		),
		'position' => 'relations',
		'preview_max_width' => 290,
	),
	'itop-backup' => array (
		'mysql_bindir' => '',
		'week_days' => 'monday, tuesday, wednesday, thursday, friday',
		'time' => '23:30',
		'retention_count' => 5,
		'enabled' => true,
		'itop_backup_incident' => '',
	),
	'itop-fence' => array (
		'trusted_ip_list' => array (
		),
		'malicious_ip_list' => array (
		),
		'no_answer_http_response_code' => '429',
		'checker_to_countermeasure' => array (
			0 =>
				array (
					'checker' => 'Combodo\\iTop\\Fence\\Checker\\LoginFailedListener',
					'countermeasure' => 'Combodo\\iTop\\Fence\\Countermeasure\\Slowdown',
					'min_level' => 3,
				),
			1 =>
				array (
					'checker' => 'Combodo\\iTop\\Fence\\Hybrid\\Recaptcha',
					'countermeasure' => 'Combodo\\iTop\\Fence\\Countermeasure\\LoginInvalid',
					'max_level' => 0.4,
					'login_mode_included' =>
						array (
							0 => 'form',
						),
				),
			2 =>
				array (
					'checker' => 'Combodo\\iTop\\Fence\\Hybrid\\Recaptcha',
					'countermeasure' => 'Combodo\\iTop\\Fence\\Hybrid\\Captcha',
					'min_level' => 0.4,
					'max_level' => 0.6,
					'login_mode_included' =>
						array (
							0 => 'form',
						),
				),
			3 =>
				array (
					'checker' => 'Combodo\\iTop\\Fence\\Checker\\IpRangeChecker',
					'countermeasure' => 'Combodo\\iTop\\Fence\\Hybrid\\Captcha',
					'max_level' => 1,
					'login_mode_included' =>
						array (
							0 => 'form',
						),
				),
			4 =>
				array (
					'checker' => 'Combodo\\iTop\\Fence\\Checker\\IpRangeChecker',
					'countermeasure' => 'Combodo\\iTop\\Fence\\Countermeasure\\NoAnswerUntil',
					'max_level' => 1,
					'login_mode_excluded' =>
						array (
							0 => 'form',
						),
				),
			5 =>
				array (
					'checker' => 'Combodo\\iTop\\Fence\\Checker\\IpRangeChecker',
					'countermeasure' => 'Combodo\\iTop\\Fence\\Countermeasure\\NoAnswerUntil',
					'min_level' => 2,
				),
		),
	),
);

/**
 *
 * Data model modules to be loaded. Names are specified as relative paths
 *
 */
$MyModules = array(
	'addons' => array('user rights' => 'addons/userrights/userrightsprofile.class.inc.php'),
);
?>