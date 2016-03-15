<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 权限管理
 * @author PanhChao
 */
class Controller_Test extends Controller_Template {

	protected $_default = 'layout/privilege';


	/**
	 * 权限列表
	 */
	public function action_list() {

		$url = "http://i.s.lis.video.sina.com.cn:8081/program/getRtmpUrl";
		$data = array (
			'start_time'=> time()+3600,
			'end_time' => time()+7200,
			'ip' => '123.126.53.54',
			'session_id' => 'sdasdasdeals',
			'appname' => 'finance',
			'callback_url' => 'http://lis.sports.sina.com.cn'
		);
		// "http://i.s.lis.video.sina.com.cn:8081/program/getRtmpUrl/?start_time=1457065650&end_time=1457069250&ip=123.124.53.54&session_id=sdasdasdeals&appname=finance&callback_url=http://lis.sports.sina.com.cn"
		$response = Curl::instance()
			->timeout(30)
			->url($url)
			->post($data);
		echo $response->getCode(). "<br/>";
		echo $response->getMessage() . "<br/>";
		echo $response->getData() . "<br/>";
		exit();
		//$privileges = Model::factory('Privilege')->getPrivileges()->getObject();
		// $navigators = Model::factory('Privilege')->getNavigators($privileges)->getObject();
		// $menus = Model::factory('Privilege')->getMenus($privileges)->getObject();
		// $controllers = Model::factory('Privilege')->getControllers($privileges)->getObject();

		//$this->_default->content = View::factory('privilege/list')
			//->set('privileges', $privileges);
			// ->set('navigators', $navigators)
			// ->set('menus', $menus)
			// ->set('controllers', $controllers);
	}

	public function action_modify() {

	}
}
