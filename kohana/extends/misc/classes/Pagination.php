<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 分页类
 * @author PanChao
 */
class Pagination {

	//分页数据
	protected $_pageData = array ();
	//当前页
	protected $_pageIndex = 0;
	//每页的条数
	protected $_pageSize = 10;
	//总共多少条
	protected $_total = 0;

	public static function factory($pageSize, $pageIndex, $total) {

		return new self($pageSize, $pageIndex, $total);
	}

	public function __construct($pageSize, $pageIndex, $total) {

		$this->_pageSize = $pageSize;
		$this->_pageIndex = $pageIndex;
		$this->_total = $total;

		$this->_pageData = array (
			'pageSize' => $pageSize,
			'pageIndex' => $pageIndex,
			'total' => $total,
		);
	}

	public function pageSize() {
		return $this->_pageSize;
	}

	public function pageIndex() {
		return $this->_pageIndex;
	}

	public function pageData() {
		return json_encode($this->_pageData, true);
	}

	public function total() {
		return $this->_total;
	}

	public function offset() {

		return $this->_pageIndex * $this->_pageSize;
	}

	public function number() {
		return $this->_pageSize;
	}
}