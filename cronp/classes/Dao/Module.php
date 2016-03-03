<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 模块 dao
 * @author PanChao
 */
class Dao_Module extends Dao_Base {

	protected $_table = 'module';

	protected $_db = 'cron_task';

	protected $_primaryKey = 'module_id';

	/**
	 * 模块总数
	 * @return integer
	 */
	public function countModules() {

		return parent::countAllData();
	}

	/**
	 * 分页查找
	 * @param  intger $offset 偏移量
	 * @param  intger $number 
	 * @return array
	 */
	public function getModulesByLimit($offset = 0, $number = 0) {

		return parent::getDataByLimit($offset, $number);
	}

	/**
	 * 得到所有的模块
	 * @return array
	 */
	public function getModules() {

		return parent::getAllData();
	}
}