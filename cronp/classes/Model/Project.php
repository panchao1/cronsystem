<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 项目 model
 * @author PanChao
 */
class Model_Project extends Model {

	/**
	 * 创建项目
	 * @param  array  $values 
	 * @return array
	 */
	public function create(array $values = array()) {

		$fields = array (
			'name' => '',
			'describe' => '',
			'account_id' => 0,
			'status' => 0,
			'create_time' => time(),
			'update_time' => time(),
		);
		
		$values = array_intersect_key($values, $fields);
		$values = $values + $fields;

		return Dao::factory('Project')->insert($values);
	}

	/**
	 * 项目总数
	 * @return array
	 */
	public function countProjects() {
		return Dao::factory('Project')->countProjects();
	}

	/**
	 * 获取所有项目
	 * @return array
	 */
	public function getProjects() {

		return Dao::factory('Project')->getProjects();
	}

	/**
	 * 分页获取项目
	 * @param integer $number
	 * @param integer $offset
	 * @return array
	 */
	public function getProjectsBylimit($offset, $number) {

		return Dao::factory('Project')->getProjectsBylimit($offset, $number);
	}

	/**
	 * 项目状态
	 * @return String
	 */
	public function getStatus() {

		if($this->status == '-1') {
			$status = '删除';
		}
		if($this->status == '0') {
			$status = '正常';
		}
		
		return $status;
	}
}