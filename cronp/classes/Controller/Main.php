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

		$this->_default->content = View::factory('main/index');
	}
}