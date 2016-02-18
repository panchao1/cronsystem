<?php
/**
 * 日志信息配置
 */
return array(

	/**
	 * 运行日志（文件）
	 */
	'run_log' => array (

		'type' => 'file',
		'parameters' => array (
			'name' => 'run_log',
			'ext' => 'log',
			'path' => APPPATH.'/logs',
			'slice' => '',
		)

	),
	
	/**
	 * 错误日志（数据库）
	 */
	'error_log' => array(
		'type' => 'database',
		'parameters' => array (
			'type' 		 => 'MYSQL',
			'hostname'   => 'localhost',
			'port'		 =>	'3306',
			'database'   => 'test',
			'username'   => 'root',
			'password'   => '123456',
			'charset'    => 'utf8',
			'table'      => 'test',
			'slice'		 => '',
		),
	),

	
);
