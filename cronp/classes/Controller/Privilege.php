<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 权限管理
 * @author PanhChao
 */
class Controller_Privilege extends Controller_Template {

	protected $_default = 'layout/privilege';

	/**
	 * 添加权限
	 */
	public function action_add() {

		$privileges = Model::factory('Privilege')->getPrivileges()->getArray();
		$privileges = Model::factory('Privilege')->recurse($privileges)->getObject();
		
		$this->_default->content = View::factory('privilege/form')
				->bind('privileges', $privileges);

	}

	/**
	 * 添加保存
	 */
	public function action_save() {

		$name = Arr::get($_POST, 'name', '');
		$type = Arr::get($_POST, 'type', '');
		$parentId = Arr::get($_POST, 'parent_id', 0);
		$controller = Arr::get($_POST, 'controller', '');
		$action = Arr::get($_POST, 'action', '');
		$icon = Arr::get($_POST, 'icon', '');
		$isDisplay = Arr::get($_POST, 'is_display', 1);
		$sequence = Arr::get($_POST, 'sequence', 0);

		if(!$name) {
			return Prompt::jsonWarning('权限名称不能为空');
		}
		if($type != 'menu' && $type != 'navigator' && $type != 'controller') {
			return Prompt::jsonWarning('类型选择错误'.$type);
		}
		//导航-- 没有上级，控制器，动作都为空
		if($type == 'navigator') {

			if($parentId != 0) {
				return Prompt::jsonWarning('导航不用选择上级');
			}
			if($controller) {
				return Prompt::jsonWarning('导航没有控制器');
			}
			if($action) {
				return Prompt::jsonWarning('导航没有动作');
			}
		}
		//菜单 -- 有上级，无控制器，方法
		if($type == 'menu') {
			if($controller) {
				return Prompt::jsonWarning('菜单没有控制器');
			}
			if($action) {
				return Prompt::jsonWarning('菜单没有动作');
			}
		}
		//控制器。必须有上级，控制器，方法
		if($type == 'controller') {
			if($parentId == 0) {
				return Prompt::jsonWarning('控制器上级必须是菜单');
			}
			if(!$controller) {
				return Prompt::jsonWarning('控制器必须填写');
			}
			if(!$action) {
				return Prompt::jsonWarning('控制器必须有动作');
			}
		}
		if($sequence === '') {
			$sequence = 0;
		}
		if($sequence && !is_numeric($sequence)) {
			return Prompt::jsonWarning('排序必须是数字');
		}

		$values = array (
			'name' => $name,
			'type' => $type,
			'parent_id' => $parentId,
			'controller' => $controller,
			'action' => $action,
			'icon' => $icon,
			'is_display' => $isDisplay,
			'sequence' => $sequence,
		);

		try {
			$result = Model::factory('Privilege')->create($values)->getArray();
			if(!$result) {
				//TODO 日志
				return Prompt::jsonError('添加权限失败');
			}
		} catch (Exception $e) {
			//TODO 日志
			echo $e->getMessage();exit();
			return Prompt::jsonError('添加权限失败'. $e->getMessage());
		}

		//TODO 日志
		return Prompt::jsonSuccess('添加权限成功', URL::site('privilege/add'));

	}

	/**
	 * 权限列表
	 */
	public function action_list() {

		$privileges = Model::factory('Privilege')->getPrivileges()->getArray();
		// $privileges = Model::factory('Privilege')->recurse($privileges)->getObject();
		//$privileges = Model::factory('Privilege')->getPrivileges()->getObject();

		$navigators = Model::factory('Privilege')->getNavigators($privileges)->getObject();
		$menus = Model::factory('Privilege')->getMenus($privileges)->getObject();
		$controllers = Model::factory('Privilege')->getControllers($privileges)->getObject();

		$this->_default->content = View::factory('privilege/list')
			->set('navigators', $navigators)
			->set('menus', $menus)
			->set('controllers', $controllers);
	}

	public function action_modify() {

	}
}
