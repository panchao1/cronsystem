<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 任务管理
 * @author PanChao
 */
class Controller_Task extends Controller_Template {


	protected $_default = 'layout/default';

	/**
	 * 添加任务
	 */
	public function action_add() {

		$projects = Model::factory('Project')->getProjects()->getObject();

		$this->_default->content = View::factory('task/form')
				->set('projects', $projects);
	}

	/**
	 * 保存任务
	 */
	public function action_save() {

		Prompt::jsonSuccess('任务添加成功', URL::site('task/add'));
	}

	/**
	 * 任务列表
	 */
	public function action_list() {

		$data = array (
			'name' => 'dal',
			'password' => '456789',
		);
		Logger::factory('error_log')->write($data)->execute();
	}
}
