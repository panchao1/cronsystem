<?php
/**
 * 角色管理
 * @author PanChao
 */
class Controller_Role extends Controller_Template {

	protected $_default = 'layout/default';

	/**
	 * 添加角色
	 */
	public function action_add() {

		$this->_default->content = View::factory('role/form');
	}

	/**
	 * 添加保存
	 */
	public function action_save() {
		$this->_autoRender = FALSE;

		$name = Arr::get($_POST, 'name', '');
		if($name == '') {
			Prompt::jsonWarning('角色名称不能为空!');
		}

		$values = array (
			'name' => $name,
		);

		try {
			$result = Model::factory('Role')->create($values)->getArray();
			if(!$result) {
				//日志
				Prompt::jsonError('添加角色失败');
			}
		} catch (Exception $e) {
			//日志
			Logger::factory('run_log')->write('添加角色失败 ' . $e->getMessage())->execute();
			Prompt::jsonError('添加角色失败');

		}

		//日志
		Prompt::jsonSuccess('添加角色成功', URL::site('role/add'));
	
	}

	/**
	 * 角色列表
	 */
	public function action_list() {

		$total = Model::factory('Role')->countRoles()->getArray();
		$pagination = Pagination::factory($total);

		$roles = Model::factory('Role')->getRolesByLimit($pagination->offset(), $pagination->number())->getObject();

		$this->_default->content = View::factory('role/list')
				->set('roles', $roles)
				->set('pagination', $pagination);

	}
}