<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 项目 dao 
 */
class Dao_Project extends Dao_Base {

	protected $_table = 'project';

	protected $_db = 'cron_task';

	protected $_primaryKey = 'project_id';


	/**
	 * 项目总数
	 * @return array
	 */
	public function countProjects() {

		return parent::countAllData();
	}

	/**
	 * 获取所有的项目
	 * @return array 
	 */
	public function getProjects() {

		return parent::getAllData();
	}

	/**
	 * 分页获取项目
	 * @param integer $number
	 * @param integer $offset
	 * @return array 
	 */
	public function getProjectsBylimit($offset = 0, $number = 0) {

		return parent::getDataByLimit($offset, $offset);
	}

}