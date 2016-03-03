<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 权限 dao
 * @author PanChao
 */
class Dao_Privilege extends Dao_Base {

	protected $_table = 'privilege';

	protected $_db = 'cron_task';

	protected $_primaryKey = 'privilege_id';

	/**
	 * 根据上级id 查找权限
	 * @param  integer $parentId 
	 * @return array
	 */
	public function getPrivilegesByParentId($parentId = 0) {

		return DB::select('*')
			->from($this->_table)
			->where('parent_id', '=', $parentId)
			->execute($this->_db)
			->as_array();
	}

	/**
	 * 获取所有的权限
	 * @return array
	 */
	public function getPrivileges() {
		
		return $this->getAllData();
	}

	/**
	 * 获取所有的权限
	 * @return array
	 */
	public function getPrivilegesIsDisplay() {
		
		return DB::select('*')
			->from($this->_table)
			->where('is_display', '=', Model_Privilege::ISDISPLAY)
			->execute($this->_db)
			->as_array();
	}
}