<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 日志数据库操作
 * @author PanChao
 */
class Logger_Database_Handler extends Logger_Database {


	/**
	 * 初始化对象
	 * @return [type] [description]
	 */
	public static function init() {

		return new self();
	}

	/**
	 * 将数据库信息写入 Config
	 * @return 
	 */
	public function __construct() {

		parent::__construct();
		
		$config = array (
			'type'       => 'MySQL',
			'connection' => array(
				'hostname'   => $this->_hostname,
				'database'   => $this->_database,
				'username'   => $this->_username,
				'password'   => $this->_password,
				'persistent' => FALSE,
			),
			'table_prefix' => '',
			'charset'      => $this->_charset,
			'caching'      => FALSE,
		);
		
		//将数据库信息加载到配置系统
		$db = Database::instance(self::$_key, $config);

	}

	/**
	 * 插入信息
	 * @param  array $data
	 * @return boolean
	 */
	public function insert($data) {

		return DB::insert($this->_table)
			->columns(array_keys($data))
			->values(array_values($data))
			->execute(self::$_key);
	}

}