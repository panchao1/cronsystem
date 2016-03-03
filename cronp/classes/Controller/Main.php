<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 主页管理
 * @author  Panchao
 */
class Controller_Main extends Controller_Template {


	protected $_default = "layout/default";

	/**
	 * main
	 */
	public function action_index() {

		$privileges = Model::factory('Privilege')->getPrivilegesIsDisplay()->getArray();
		$navigators = Model::factory('Privilege')->getNavigators($privileges)->getObject();
		$menus = Model::factory('Privilege')->getMenus($privileges)->getObject();
		$controllers = Model::factory('Privilege')->getControllers($privileges)->getObject();

		$this->_default->content = View::factory('main/index')
			->set('navigators', $navigators)
			->set('menus', $menus)
			->set('controllers', $controllers);
	}
}