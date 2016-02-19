<?php
/** 
 * session 配置信息
 * @author PanChao
 */
return array (

	/**
	 * session database
	 */
	'type' => 'database',
	'connection' => array (
		'host' => '127.0.0.1',
		'port' => '3306',
		'username' => 'root',
		'password' => '123456',
		'database' => 'cron_task',
		'table' => 'cts_session',
		'charset' => 'utf8'
	),

	/**
	 * session redis
	 */
	// 'type' => 'redis',
	// 'connection' => array (
	// 	'server1' => array (
	// 		'host' => '127.0.0.1',
	// 		'port' => '6379',
	// 	),
	// 	'server2' => array (
	// 		'host' => '127.0.0.1',
	// 		'port' => '6380',
	// 	),
	// ),

	/**
	 * session memcache
	 */
	// 'type' => 'memcache',
	// 'connection' => array (
	// 	'host' => '127.0.0.1',
	// 	'port' => '8888',
	// ),

	/**
	 * session mongodb
	 */
	// 'type' => 'mongodb',
	// 'connection' => array (
	// 	'host' => '127.0.0.1',
	// 	'port' => '7767',
	// ),

);