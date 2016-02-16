<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			'hostname'   => 'localhost',
			'database'   => '',
			'username'   => FALSE,
			'password'   => FALSE,
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
	'cron_task' => array
	(
		'type'       => 'MySQL',
		'connection' => array(
			'hostname'   => '127.0.0.1',
			'database'   => 'cron_task',
			'username'   => 'root',
			'password'   => '123456',
			'persistent' => FALSE,
		),
		'table_prefix' => 'cts_',
		'charset'      => 'utf8',
		'caching'      => FALSE,
	),
	// 'alternate' => array(
	// 	'type'       => 'PDO',
	// 	'connection' => array(
	// 		/**
	// 		 * The following options are available for PDO:
	// 		 *
	// 		 * string   dsn         Data Source Name
	// 		 * string   username    database username
	// 		 * string   password    database password
	// 		 * boolean  persistent  use persistent connections?
	// 		 */
	// 		'dsn'        => 'mysql:host=localhost;dbname=kohana',
	// 		'username'   => 'root',
	// 		'password'   => 'r00tdb',
	// 		'persistent' => FALSE,
	// 	),
	// 	/**
	// 	 * The following extra options are available for PDO:
	// 	 *
	// 	 * string   identifier  set the escaping identifier
	// 	 */
	// 	'table_prefix' => '',
	// 	'charset'      => 'utf8',
	// 	'caching'      => FALSE,
	// ),
);
