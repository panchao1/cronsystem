<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * redis 配置
 */
return array (

	'test' => array (
		
		'servers' => array(
			array(
				'host' => '127.0.0.1',
				'port' => '9379',
				'persistent' => FALSE,
				'password' => NULL,
				'timeout' => 0,
			),
			
			array(
				'host' => '127.0.0.1',
				'port' => '9380',
				'persistent' => FALSE,
				'password' => NULL,
				'timeout' => 0,
			),
			array(
				'host' => '127.0.0.1',
				'port' => '9381',
				'persistent' => FALSE,
				'password' => NULL,
				'timeout' => 0,
			),
		),
		'consistenthashing' => array(
			'function' => 'md5',
			'replicas' => 64,
		),
	),

	'test2' => array (
		
		'servers' => array(
			array(
				'host' => '127.0.0.1',
				'port' => '9382',
				'persistent' => FALSE,
				'password' => NULL,
				'timeout' => 0,
			),
			
			array(
				'host' => '127.0.0.1',
				'port' => '9383',
				'persistent' => FALSE,
				'password' => NULL,
				'timeout' => 0,
			),
		),
		'consistenthashing' => array(
			'function' => 'md5',
			'replicas' => 64,
		),
	),
);