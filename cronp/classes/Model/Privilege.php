<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 权限管理
 * @author PanChao
 */
class Model_Privilege extends Model {


	const ISDISPLAY = 1;
	const NODISPLAY = 0;
	
	/**
	 * 创建权限
	 * @param  array  $values 
	 * @return integer
	 */
	public function create(array $values = array ()) {

		$fields = array (
			'name' => '',
			'type' => '',
			'parent_id' => '',
			'controller' => '',
			'action' => '',
			'icon' => '',
			'is_display' => '',
			'sequence' => '',
			'create_time' => time(),
			'update_time' => time(),
		);

		$values = array_intersect_key($values, $fields);
		$values = $values + $fields;

		return Dao::factory('Privilege')->insert($values);
	}

	/**
	 * 获取所有的权限
	 * @return array
	 */
	public function getPrivileges() {
		return Dao::factory('Privilege')->getPrivileges();
	}

	/**
	 * 获取所有的可显示的权限
	 * @return array
	 */
	public function getPrivilegesIsDisplay() {
		return Dao::factory('Privilege')->getPrivilegesIsDisplay();
	}

	/**
	 * 递归返回
	 * @return array
	 */
	public function recurse(array $privileges, $parentId = 0) {

		static $returnResults = array();

		foreach ($privileges as $privilege) {
			if($privilege['parent_id'] == $parentId) {
				$returnResults[] = $privilege;
				self::recurse($privileges, $privilege['privilege_id']);
			}
		}
		return $returnResults;
	}

	/**
	 * 得到导航
	 * @param  Model_Privilege $privileges
	 * @return object
	 */
	public function getNavigators(array $privileges) {
		$navigators = array ();

		foreach ($privileges as $privilege) {
			if($privilege['type'] == 'navigator') {
				$navigators[] = $privilege;
			}
		}
		return $navigators;
	}

	/**
	 * 得到菜单
	 * @param  Model_Privilege $privileges
	 * @return object
	 */
	public function getMenus(array $privileges) {
		$menus = array ();

		foreach ($privileges as $privilege) {
			if($privilege['type'] == 'menu') {
				$menus[] = $privilege;
			}
		}
		return $menus;
	}

	/**
	 * 得到控制器
	 * @param  Model_Privilege $privileges
	 * @return object
	 */
	public function getControllers(array $privileges) {
		$controllers = array ();

		foreach ($privileges as $privilege) {
			if($privilege['type'] == 'controller') {
				$controllers[] = $privilege;
			}
		}
		return $controllers;
	}
}