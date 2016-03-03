<?php
/**
 * Dao 基类
 * 每个 dao 继承
 * @author PanChao
 */
class Dao_Base extends Dao {


	/**
	 * 得到所有的数据
	 * @return array
	 */
	public function getAllData() {

		return DB::select('*')
			->from($this->_table)
			->execute($this->_db)
			->as_array();
	}

	/**
	 * 插入数据
	 * @param  array $values 
	 * @return boolean
	 */
	public function insert(array $values = array()) {

		if(!$values) {
			return FALSE;
		}
		
		return DB::insert($this->_table)
			->columns(array_keys($values))
			->values(array_values($values))
			->execute($this->_db);
	}

	/**
	 * 分页查找数据
	 * @param  integer $offset 
	 * @param  integer $number 
	 * @return array
	 */
	public function getDataByLimit($offset = 0, $number = 0) {

		$select = DB::select('*')
			->from($this->_table);
		if($offset) {
			$select->offset($offset);
		}
		if($number) {
			$select->limit($number);
		}
		
		return $select->execute($this->_db)
			->as_array();
	}

	/**
	 * 获取数据总数
	 * @return integer
	 */
	public function countAllData() {

		return DB::select(DB::expr('count(*) AS recordCount'))
			->from($this->_table)
			->execute($this->_db)
			->get('recordCount');
	}

	/** 
	 * 根据主键修改一条数据
	 * @param  array $values
	 * @param  integer $keyId
	 * @return boolean
	 */
	public function updateByPrimaryKey(array $values, $keyId) {
		
		if(!$values) {
			return 0;
		}
		return DB::update($this->_table)
			->set($values)
			->where($this->_primaryKey, '=', $keyId)
			->execute($this->_db);
	}

	/**
	 * 根据主键删除一条数据
	 * @param  integer $keyId
	 * @return boolean
	 */
	public function deleteByPrimaryKey($keyId) {

		return DB::delete($this->_table)
			->where($this->_primaryKey, '=', $keyId)
			->execute($this->_db);
	}

	/**
	 * 根据主键来查找一条数据
	 * @param  intger $keyId 
	 * @return array
	 */
	public function getDataByPrimaryKey($keyId) {

		return DB::select('*')
			->from($this->_table)
			->where($this->_primaryKey, '=', $keyId)
			->execute($this->_db)
			->as_array();
	}
}