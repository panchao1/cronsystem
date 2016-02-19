<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * redis 操作类
 * @author PanChao
 */
class Redisd {

	
	protected static $_instance = NULL;

	protected static $_redisdConfig = array ();

	/**
	 * 单例
	 * @return 对象
	 */
	public static function instance() {
		if(self::$_instance === NULL) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function __construct() {

		self::$_redisdConfig = Kohana::$config->load('redisd');
	}

	public function set() {

		return $this;
	}

	public function sets() {
		return $this;
	}

	public function get() {
		return $this;
	}

	public function gets() {
		return $this;
	}

	public function del() {
		return $this;
	}

	public function dels() {
		return $this;
	}

	public function hset() {
		return $this;
	}

	public function hget() {
		return $this;
	}

	public function flushAll() {

	}

	/**
 	 * 数据自增
 	 */
 	public function increment($key) {

 	}

 	/**
 	 * 数据自减
 	 */
 	public function decrement($key) {

 	}

 	/**
 	 * 执行
 	 * @param  string $group
 	 * @return 
 	 */ 	 
 	public function execute($group) {

 		$config = isset(self::$_redisdConfig[$group]) ? self::$_redisdConfig[$group] : self::$_redisdConfig['default'];
 		$servers = $config['servers'];
 		$consistenthashing = $config['consistenthashing'];

 		//连接对象池 一致性哈希


 	}

}