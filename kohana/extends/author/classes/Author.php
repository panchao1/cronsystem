<?php
/**
 * author 用户类
 * @author PanChao
 */
class Author {

	protected static $_instance = NULL;

	public static function instance() {
		if (self::$_instance === NULL) {
			self::$_instance = new self();
		}

		return self::$_instance;
	} 

	/**
	 * 检查是否已经登录
	 * @return boolean
	 */
	public function isLogin() {

		$isLogin = TRUE;

		$account = Session::instance()->get('author');
		if(!$account) {
			$isLogin = FALSE;
		}

		return $isLogin;
	}
}