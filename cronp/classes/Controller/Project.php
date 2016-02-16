<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 项目管理
 */
class Controller_Project extends Controller_Template {

	protected $_default = 'layout/default';

	/**
	 * 添加项目
	 */
	public function action_add() {

		$this->_default->content = View::factory('project/form');
	}

	/**
	 * 添加保存
	 */
	public function action_save() {
		$this->_autoRender = FALSE;

		$name = Arr::get($_POST, 'name', '');
		$describe = Arr::get($_POST, 'describe', '');

		if(!$name) {
			return Prompt::jsonWarning('名称不能为空');
		}
		if(!$describe) {
			return Prompt::jsonWarning('描述不能为空');
		}

		$values = array (
			'name' => $name,
			'describe' => $describe,
			'account_id' => 0,
		);
		try {
			$result = Model::factory('Project')->create($values)->getArray();
			if(!$result) {
				//TODO 日志
				return Prompt::jsonError('添加项目失败');
			}
		} catch (Exception $e) {
			//TODO 日志
			return Prompt::jsonError('添加项目失败');
		}

		//TODO 日志
		return Prompt::jsonSuccess('添加项目成功', URL::site('project/add'));
	}

	/**
	 * 项目列表
	 */
	public function action_list() {

		$pageSize = Arr::get($_GET, 'page_size', 10);
		$pageIndex = Arr::get($_GET, 'page_index', 0);

		$total = Model::factory('Project')->countProjects()->getArray();

		$pagination = Pagination::factory($pageSize, $pageIndex, $total);

		$projects = Model::factory('Project')->getProjectsBylimit($pagination->offset(), $pagination->number())->getObject();

		$this->_default->content = View::factory('project/list')
					->bind('projects', $projects)
					->set('pagination', $pagination);
	}

}
