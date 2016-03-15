<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 个人中心
 * @author PanChao
 */
class Controller_Personal extends Controller_Template {
	
	protected $_default = 'layout/default';

	/**
	 * 个人信息
	 */
	public function action_info() {

		$account = Session::instance()->get('author');
		$account = Model::factory('Account')->getAccountByAccountId($account['account_id'])->getObject()->current();

		$this->_default->content = View::factory('personal/list')
					->set('account', $account);
	}

	/**
	 * 修改
	 */
	public function action_edit() {
		
	}

	public function action_modify() {
		
	}
}