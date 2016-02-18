<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 用户数据库访问
 * @author PanChao
 */
class Dao_Account extends Dao_Base {

	protected $_table = 'account';

	protected $_db = 'cron_task';

	protected $_primaryKey = 'account_id';

	/**
	 * 得到账号信息
	 * @return array
	 */
	public function getAccounts() {

		return parent::getAllData();
	}

	/**
	 * 根据用户名查找用户信息
	 * @param  string $username 
	 * @return array
	 */
	public function getAccountByName($name) {

		return DB::select('*')
			->from($this->_table)
			->where('name', '=', $name)
			->execute($this->_db)
			->as_array();
	}

	/**
	 * 根据用户ID查找用户信息
	 * @param  string $username 
	 * @return array
	 */
	public function getAccountByAccountId($accountId) {

		return parent::getDataByPrimaryKey($accountId);
	}

	/**
	 * 账号总数
	 * @return integer
	 */
	public function countAccounts() {

		return parent::countAllData();
	}

	/**
	 * 得到用户（分页）
	 * @param  integer $offset 
	 * @param  integer $number 
	 * @return array
	 */
	public function getAccountsByLimit($offset = 0, $number = 0) {

		return parent::getDataByLimit($offset, $number);
	}
}
