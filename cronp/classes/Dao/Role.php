<?php
/**
 * 角色 dao
 * @author PanChao
 */
class Dao_Role extends Dao_Base {

	protected $_table = 'role';

	protected $_db = 'cron_task';

	protected $_primaryKey = 'role_id';

	/**
	 * 角色总数
	 * @return integer
	 */
	public function countRoles() {

		return parent::countAllData();
	}

	/**
	 * 分页查找
	 * @param  intger $offset 偏移量
	 * @param  intger $number 
	 * @return array
	 */
	public function getRolesByLimit($offset = 0, $number = 0) {

		return parent::getDataByLimit($offset, $number);
	}

	/**
	 * 得到所有的角色
	 * @return array
	 */
	public function getRoles() {

		return parent::getAllData();
	}
}