<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Mongodb PHP session class.
 *
 * @package    Kohana
 * @category   Session
 * @author     PanChao
 * @copyright  (c) 2008-2012 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class Session_Mongodb extends Session {

	/**
	 * 返回 session_id
	 * @return  string
	 */
	public function id() {
		return session_id();
	}


	/**
	 * 根据 session_id 读取 session 信息
	 * @param   string  $id session id
	 * @return  string
	 */
	protected function _read($id = NULL) {

	}

	/**
	 * 产生新的 session 返回
	 * @return  string
	 */
	protected function _regenerate() {

	}

	/**
	 * 写入session
	 * @return  boolean
	 */
	protected function _write() {

	}

	/**
	 * 销毁当前的 session
	 * @return  boolean
	 */
	protected function _destroy() {

	}

	/**
	 * 重新开启 session
	 * @return  boolean
	 */
	protected function _restart() {

	}
}