<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Model 返回
 * @author Panchao
 */
class Model_Result {

	const RETURN_JSON = 'json';
	const RETURN_ARRAY = 'array';
	const RETURN_XML = 'xml';
	const RETURN_OBJECT = 'object';

	protected $_result;

	public static function factory($result, $returnType = '', $asObject) {
		if($returnType == '') {
			throw new Model_Result_Exception("return Type is empty");
		}
		$returnType = strtolower($returnType);
		
		if($returnType == self::RETURN_JSON) {
			return Model_Result_Json::instance()->execute($result);
		}
		if($returnType == self::RETURN_XML) {
			return Model_Result_Xml::instance()->execute($result);
		}
		if($returnType == self::RETURN_OBJECT) {
			return new Model_Result_Object($result, $asObject);
		}
		if($returnType == self::RETURN_ARRAY) {
			return $result;
		}
		
		return $result;
	}

}

