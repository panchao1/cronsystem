<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Model 类
 * @author Panchao
 */
 class Model {

	protected $_properties;

	protected $_returnType;

	protected static $_instance;

	protected static $_className;

	protected $_method;

	protected $_arguments = array ();

	public static function factory($model) {
		
		self::$_className = "Model_" . $model;
		if(!class_exists(self::$_className)) {
			throw new Model_Exception("class model not exists");
		}
		if(self::$_instance === NULL) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function __construct($data = array ()) {
		if($data) {
			$this->_properties = $data;
		}
	}
	
	public function __set($item, $value) {
		if(is_string($item)) {
			$item = implode('_', preg_split('#(?=[A-Z])#', lcfirst($item)));
			$item = strtolower($item);
			$this->_properties[$item] = $value;
		}
	}

	public function __get($item) {
		$item = implode('_', preg_split('#(?=[A-Z])#', lcfirst($item)));
		$item = strtolower($item);
		return isset($this->_properties[$item]) ? $this->_properties[$item] : NULL;
	}

	public function __call($method, $arguments = array ()) {
		
		$this->_method = $method;
		$this->_arguments = $arguments;

		return $this;
	}

	public function getObject() {
		$this->_returnType = Model_Result::RETURN_OBJECT;
		return $this->_execute();
	}

	public function getArray() {
		$this->_returnType = Model_Result::RETURN_ARRAY;
		return $this->_execute();
	}

	public function getJson() {
		$this->_returnType = Model_Result::RETURN_JSON;
		return $this->_execute();
	}

	public function getXml() {
		$this->_returnType = Model_Result::RETURN_XML;
		return $this->_execute();
	}

	private function _execute() {

		$instance = new ReflectionClass(self::$_className);
		$model = $instance->newInstance();
		$response = $instance->getMethod($this->_method)->invokeArgs($model, $this->_arguments);
		
		return Model_Result::factory($response, $this->_returnType, self::$_className);
	}
}