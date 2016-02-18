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

		$accountId = $_SESSION['login']['account_id'];
		$account = Model::factory('Account')->getAccountByAccountId($accountId)->getObject()->current();

		$this->_default->content = View::factory('personal/list')
					->set('account', $account);
	}
}