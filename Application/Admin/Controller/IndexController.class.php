<?php

namespace Admin\Controller;
use Think\Controller;

class IndexController extends BaseController{

	/**
	 * 后台默认首页
	 * @return [type] [description]
	 */
	public function index(){
		$this->_initialize();
		$this->display();
	}

	public function test(){
		$this->display();
	}


}