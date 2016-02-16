<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 用户数据库访问
 * @author PanChao
 */
class Dao_Account extends Dao {

	protected $_table = 'account';

	protected $_db = 'cron_task';

	/**
	 * 插入一条
	 * @param  array  $values 
	 * @return integer
	 */
	public function insert(array $values) {

		return DB::insert($this->_table)
			->columns(array_keys($values))
			->values(array_values($values))
			->execute($this->_db);
	}

	/**
	 * 得到账号信息
	 * @return array
	 */
	public function getAccounts() {

		return DB::select('*')
			->from($this->_table)
			->execute($this->_db)
			->as_array();
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
}
