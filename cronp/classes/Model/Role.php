<?php
/**
 * 角色 model
 * @author PanChao
 */
class Model_Role extends Model {


	/**
	 * 创建角色
	 * @param array $values
	 * @return integer
	 */
	public function create(array $values = array()) {

		$fields = array (
			'name' => '',
			'status' => 0,
			'create_time' => time(),
			'update_time' => time(),
		);

		$values = array_intersect_key($values, $fields);
		$values = $values + $fields;

		return Dao::factory('Role')->insert($values);
	}

	/**
	 * 角色总共条数
	 * @return integer
	 */
	public function countRoles() {

		return Dao::factory('Role')->countRoles();
	}

	/**
	 * 分页查找角色
	 * @param  intger $offset 偏移量
	 * @param  intger $number 
	 * @return array
	 */
	public function getRolesByLimit($offset = 0, $number = 0) {

		return Dao::factory('Role')->getRolesByLimit($offset, $number);
	}

	/**
	 * 得到所有的角色
	 * @return array
	 */
	public function getRoles() {
		
		return Dao::factory('Role')->getRoles();
	}

	/**
	 * 角色状态
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