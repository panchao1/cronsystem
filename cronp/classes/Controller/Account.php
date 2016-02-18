<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 账号管理
 * @author panchao
 */
class Controller_Account extends Controller_Template {

	protected $_default = 'layout/default';

	/**
	 * 添加账号
	 */
	public function action_add() {
		
		$roles = Model::factory('Role')->getRoles()->getObject();

		$this->_default->content = View::factory('account/form')
				->set('roles', $roles);
	}

	/**
	 * 保存账号
	 */
	public function action_save() {
		$this->_autoRender = FALSE;

		$givenName = Arr::get($_POST, 'given_name', '');
		$name = Arr::get($_POST, 'name', '');
		$password = Arr::get($_POST, 'password', '');
		$email = Arr::get($_POST, 'email', '');
		$mobile = Arr::get($_POST, 'mobile', '');
		$phone = Arr::get($_POST, 'phone', '');

		if($givenName == '') {
			return Prompt::jsonWarning('姓名不能为空');
		}
		if($name == '') {
			return Prompt::jsonWarning('用户名不能为空');
		}
		if($password == '') {
			return Prompt::jsonWarning('密码不能为空');
		}
		if($email == '') {
			return Prompt::jsonWarning('邮箱不能为空');
		}

		$values = array (
			'given_name' => $givenName,
			'name'	=> $name,
			'password' => md5($password),
			'email' => $email,
			'mobile' => $mobile,
			'phone' => $phone
		);

		try {
			$result = Model::factory('Account')->create($values)->getArray();
			if(!$result[0]) {
				//TODO 日志
				return Prompt::jsonError('添加账号失败');
			}
		} catch (Exception $e) {
			//TODO 日志
			return Prompt::jsonError('添加账号失败');
		}
		//TODO 日志
		return Prompt::jsonSuccess('添加账号成功', URL::site('account/add'));
	}

	/**
	 * 账号列表
	 */
	public function action_list() {

		$total = Model::factory('Account')->countAccounts()->getArray();
		$pagination = Pagination::factory($total);
		
		$accounts = Model::factory('Account')->getAccountsByLimit($pagination->offset(), $pagination->number())->getObject();
		
		$this->_default->content = View::factory('account/list')
				->set('accounts', $accounts)
				->set('pagination', $pagination);
	}
}
