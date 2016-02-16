<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Dao 类
 * @author Panchao
 */
class Dao {

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

}