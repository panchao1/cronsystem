<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Dao 类
 * @author Panchao
 */
class Dao {

	/**
	 * 库切分
	 * @var string
	 */
	protected $_sliceDb = ''; //eg: number:2

	/**
	 * 表切分
	 * @var string
	 */
	protected $_sliceTable = '';//eg: number:32

	/**
	 * factory
	 * @param  string $className 
	 * @return object
	 */
	public static function factory($className) {
		
		if($className) {
			$class = "Dao_$className";
			return new $class();
		}
	}

	/**
	 * 得到分库后的库名
	 * @param  string $key    
	 * @return string
	 */
	protected function _dbName($key) {
		
		return Slice::database($this->_sliceDb)->name($this->_db)->key($key)->execute();
	}
	
	/**
	 * 得到分表后的表名
	 * @param  string $key    
	 * @return string
	 */
	protected function _tableName($key) {
		
		return Slice::table($this->_sliceTable)->name($this->_table)->key($key)->execute();
	}

}