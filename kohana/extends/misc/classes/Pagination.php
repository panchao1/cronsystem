<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 分页类
 * @author PanChao
 */
class Pagination {

	/**
	 * 分页数据
	 * @var array
	 */
	protected $_pageData = array ();
	
	/**
	 * 当前页
	 * @var integer
	 */
	protected $_pageIndex = 0;
	
	/**
	 * 每页条数
	 * @var integer
	 */
	protected $_pageSize = 10;
	
	/**
	 * 总共条数
	 * @var integer
	 */
	protected $_total = 0;


	public static function factory($total, $pageSize = 10, $pageIndex = 0) {

		$pageSize = Arr::get($_GET, 'page_size', 10);
		$pageIndex = Arr::get($_GET, 'page_index', 0);
		
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