<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Controller before and after
 */
class Controller_Template extends Controller {

	/**
	 * @var  默认的view
	 */
	protected $_default = 'layout/default';

	/**
	 * @var  是否渲染模板
	 **/
	protected $_autoRender = TRUE;

	/**
	 * Loads the template [View] object.
	 */
	public function before()
	{

		$host = "http://" . $_SERVER['HTTP_HOST'];
		$loginUrl = $host . "/author";
		$errorUrl = $host . "/error";
		//验证权限
		// if(0 == 1 ) {
		// 	return Controller::redirect($loginUrl);
		// }

		parent::before();

		if ($this->_autoRender === TRUE)
		{
			// Load the template
			$this->_default = View::factory($this->_default);
		}
	}

	/**
	 * Assigns the template [View] as the request response.
	 */
	public function after()
	{
		if ($this->_autoRender === TRUE)
		{
			$this->response->body($this->_default->render());
		}

		parent::after();
	}
}