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
			'group' 	 => 'test', 
			'table'      => 'test',
			'slice'		 => '',
		),
		'columns' => array(
			'portal',
			'controller',
			'action',
			'get',
			'post',
			'message',
			'ip',
			'user_agent',
			'referer',
			'account_id',
			'account_name',
			'create_time',
		),
	),

	
);
