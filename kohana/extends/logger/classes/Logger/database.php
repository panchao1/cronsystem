<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 数据库日志类
 */
class Logger_Database extends Logger {

	/**
	 * 数据库连接方式
	 * @var string
	 */
	protected $_type = 'MYSQL';
	
	/**
	 * 域名
	 * @var string
	 */
	protected $_hostname = 'localhost';

	/**
	 * 端口
	 * @var integer
	 */
	protected $_port = 3306;

	/**
	 * 用户名
	 * @var string
	 */
	protected $_username = 'root';

	/**
	 * 密码
	 * @var string
	 */
	protected $_password = '';

	/**
	 * 数据库
	 * @var string
	 */
	protected $_database = '';

	/**
	 * 编码
	 * @var string
	 */
	protected $_charset = 'utf8';

	/**
	 * 表
	 * @var string
	 */
	protected $_table = '';

	/**
	 * 表切分
	 * @var string
	 */
	protected $_slice = '';
	
	/**
	 * 初始化配置参数
	 */
	public function __construct() {

		$this->_type = self::$_parameters['type'];
		$this->_hostname = self::$_parameters['hostname'];
		$this->_port = self::$_parameters['port'];
		$this->_username = self::$_parameters['username'];
		$this->_password = self::$_parameters['password'];
		$this->_database = self::$_parameters['database'];
		$this->_charset = self::$_parameters['charset'];
		$this->_table = self::$_parameters['table'];
		$this->_slice = isset(self::$_parameters['slice']) ? self::$_parameters['slice'] : '';

	}

	/**
	 * 写入
	 * @param string | array $data
	 * @return object
	 */
	public function write($data) {

		if(is_string($data)) {
			$data = array ($data);
		}
		if(!is_array($data)) {
			throw new Logger_Database_Exception("write data error must is array");
		}
		$this->_data = $data;

		return $this;
	}

	/**
	 * 得到切分后表名
	 * @param  string $key 
	 * @return string
	 */
	protected function _tableName($key) {

		return Slice::table($this->_slice)->name($this->_table)->key($key)->execute();
	}

	/**
	 * 执行
	 * @return boolean
	 */
	public function execute() {

		Logger_Database_Handler::init()->insert($this->_data);
	}
}