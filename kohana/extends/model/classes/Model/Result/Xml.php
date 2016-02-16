<?php defined('SYSPATH') or die('No direct script access.');
/**
 * result xml
 * @author panchao@staff.sina.com.cn
 */
class Model_Result_Xml extends Model_Result {

	protected $_xmlObject;

	protected static $_instance = NULL;

	public static function instance() {

		if(self::$_instance === NULL) {
			self::$_instance = new self();
		}
		
		return self::$_instance;
	}

	public function __construct() {
		
	}

	public function execute(array $data) {

		$string = '<?xml version="1.0" encoding="utf-8"?>';
		$string .= '<resultset statement="" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">';
		$string .= '</resultset>';
		$this->_xmlObject = simplexml_load_string($string);
		foreach($data as $row) {
			$rowNode = $this->_xmlObject->addChild('row');
			foreach($row as $key => $value) {
				$fieldNode = $rowNode->addChild('field', $value);
				$fieldNode->addAttribute('name', $key);
			}
		}

		return $this->_xmlObject;
	}
	
	public function __toString() {
		return $this->_xmlObject->asXML();
	}
}