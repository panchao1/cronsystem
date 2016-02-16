<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 项目 dao 
 */
class Dao_Project extends Dao {

	protected $_table = 'project';

	protected $_db = 'cron_task';

	/**
	 * 插入一条
	 * @param  array $values 
	 * @return array
	 */
	public function insert(array $values) {

		if(!$values) {
			return FALSE;
		}

		return DB::insert($this->_table)
			->columns(array_keys($values))
			->values(array_values($values))
			->execute($this->_db);
	}

	/**
	 * 项目总数
	 * @return array
	 */
	public function countProjects() {

		return DB::select(DB::expr('count(*) AS recordCount'))
			->from($this->_table)
			->execute($this->_db)
			->get('recordCount');
	}

	/**
	 * 获取所有的项目
	 * @return array 
	 */
	public function getProjects() {

		return DB::select('*')
			->from($this->_table)
			->execute($this->_db)
			->as_array();
	}

	/**
	 * 分页获取项目
	 * @param integer $number
	 * @param integer $offset
	 * @return array 
	 */
	public function getProjectsBylimit($offset = 0, $number = 0) {

		$select = DB::select('*')
			->from($this->_table);
		if($offset) {
			$select->offset($offset);
		}
		if($number) {
			$select->limit($number);
		}
		
		return $select->execute($this->_db)
			->as_array();
	}

}