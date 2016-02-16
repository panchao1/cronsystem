<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 用户管理
 * @author Panchao
 */
class Controller_Author extends Controller {

	/**
	 * login view
	 */
	public function action_index() {

		$view = View::factory('author/login');
		$this->response->body($view);
	}

	/**
	 * start login
	 */
	public function action_login() {

		$username = Arr::get($_POST, 'username', '');
		$password = Arr::get($_POST, 'password', '');

		if(!$username || !$password) {
			return Prompt::warningView('用户名密码不能为空', 'author');
		}
		try {
			$account = Model::factory('Account')->getAccountByName($username)->getObject()->current();
			if(!$account) {
				return Prompt::errorView('用户名不存在', 'author');
			}
		} catch (Exception $e) {
			echo $e->getMessage();exit();
			return Prompt::errorView('登录失败', 'author');
		}

		if($account->password && $account->password == md5($password)){

			//保存 seesion 信息
			return Controller::redirect('/');
		} else {
			return Prompt::errorView('登录失败', 'author');
		}

	}

	/**
	 * logout
	 */
	public function action_logout() {

	}

}
