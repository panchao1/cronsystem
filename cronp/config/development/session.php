<?php
/** 
 * session 配置信息
 * native |database |redis |memcache |mongodb
 * @author PanChao
 */
return array (

	'database' => array(
		/**
		 * Database settings for session storage.
		 */
		'group'   => 'cron_task',
		'table'   => 'session',
		'gc'      => 500,
		'columns' => array(
			/**
			 * session_id:  session identifier
			 * last_active: timestamp of the last activity
			 * contents:    serialized session data
			 */
			'session_id'  => 'session_id',
			'last_active' => 'last_active',
			'contents'    => 'contents'
		),
		
	),

	'redis' => array(
		/**
		 * redis settings for session storage.
		 */
		
	),

	'memcache' => array(
		/**
		 * memcache settings for session storage.
		 */
		'group'   => 'default',
		'table'   => 'sessions',
		'gc'      => 500,
		
	),

	'mongodb' => array(
		/**
		 * mongodb settings for session storage.
		 */
		
	),

);