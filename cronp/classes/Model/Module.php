<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 模块 model
 * @author PanChao
 */
class Model_Module extends Model {


	/**
	 * 创建模块
	 * @param array $values
	 * @return integer
	 */
	public function create(array $values = array()) {

		$fields = array (
			'name' => '',
			'module' => '',
			'status' => 0,
			'create_time' => time(),
			'update_time' => time(),
		);

		$values = array_intersect_key($values, $fields);
		$values = $values + $fields;

		return Dao::factory('module')->insert($values);
	}

	/**
	 * 得到所有模块
	 * @return array
	 */
	public function getModules() {

		return Dao::factory('module')->getModules();
	}

	/**
	 * 状态
	 * @return string
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