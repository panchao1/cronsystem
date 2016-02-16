<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 文件日志类
 */
class Logger_File extends Logger {


	protected $_data = '';

	public function __construct() {

	}

	/**
	 * 写入文件
	 * @param mixed $data
	 * @return boolean
	 */
	public function write($data) {

		$this->_data = $data;
		return $this;
	}

	public function execute($name) {
		$config = Kohana::$config->load('log');

		$fileName = $config['file'][$name]['name'];
		$filePath = $config['file'][$name]['path'];

		file_put_contents($filePath, $this->_data, FILE_APPEND);
	}


}
