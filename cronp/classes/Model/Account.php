<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 用户管理model
 */
class Model_Account extends Model {

	/**
	 * 创建用户
	 * @param  array $values 
	 * @return 
	 */
	public function create(array $values = array()) {

		$fields = array (
			'given_name' => '',
			'name' => '',
			'password' => '',
			'email' => '',
			'phone' => '',
			'mobile' => '',
			'status' => 0,
			'create_time' => time(),
			'update_time' => time(),
		);

		$values = array_intersect_key($values, $fields);
		$values = $values + $fields;

		return Dao::factory('Account')->insert($values);

	}

	/**
	 * 获取账号信息
	 * @return array
	 */
	public function getAccounts() {

		return Dao::factory('Account')->getAccounts();
	}

	/**
	 * 账号状态
	 * @return string
	 */
	public function getStatus() {
		if($this->status == '-1') {
			$status = '屏蔽';
		}
		if($this->status == '0') {
			$status = '正常';
		}

		return $status;
	}

	/**
	 * 根据用户名查找用户
	 * @param  string $username 
	 * @return array
	 */
	public function getAccountByName($username) {
		
		if(!$username) {
			return array();
		}
		return Dao::factory('Account')->getAccountByName($username);
	}
}