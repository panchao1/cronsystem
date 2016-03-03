<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 模块管理
 * @author PanChao
 */
class Controller_Module extends Controller_Template {

	protected $_default = 'layout/default';

	/**
	 * 添加模块
	 */
	public function action_add() {

		$this->_default->content = View::factory('module/form');
		
	}

	/**
	 * 添加保存
	 */
	public function action_save() {

		$name = Arr::get($_POST, 'name', '');
		$module = Arr::get($_POST, 'module', '');

		if($name == '') {
			return Prompt::jsonWarning('名称不能为空');
		}
		if($module == '') {
			return Prompt::jsonWarning('模块不能为空');
		}

		$values = array(
			'name' => $name,
			'module' => $module,
		);

		try {
			$result = Model::factory('module')->create($values)->getArray();
			if(!$result) {
				//Todo 日志
				return Prompt::jsonError('添加模块失败');
			}
		} catch (Exception $e) {
			//TODO 日志
			return Prompt::jsonError('添加模块失败');
		}

		//TODO 日志
		return Prompt::jsonSuccess('添加模块成功', URL::site('module/add'));
	}

	/**
	 * 模块列表
	 */
	public function action_list() {

		$modules = Model::factory('module')->getModules()->getObject();

		$this->_default->content = View::factory('module/list')
				->set('modules', $modules);
	}

	/**
	 * 修改模块
	 */
	public function action_update() {

	}

	/**
	 * 修改保存
	 */
	public function action_modify() {

	}

}