<?php defined('SYSPATH') or die('No direct script access.');
/**
 * result json
 * @author panchao@staff.sina.com.cn
 */
class Model_Result_Json extends Model_Result {

	protected static $_instance = NULL;

	public static function instance() {

		if(self::$_instance === NULL) {
			self::$_instance = new self();
		}
		
		return self::$_instance;
	}

	public function __construct() {
		
	}

	public function execute($data) {
		$this->_result = json_encode($data, true);
		return $this->_result;
	}
	

	public function __toString() {
		return $this->_result;
	}
}