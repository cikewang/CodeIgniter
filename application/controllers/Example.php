<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * All rights reserved.
 * 首页
 * @author          libo <bli@pbicn.com>
 * @time            2014/12/31 13:45:38
 * @version         1.0.0
 */

class Example extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 实例
	 * @return [type]
	 */
	public function index()
	{
		$this->tp->display('example/index.html');
	}

	/**
	 * 使用 Mongo DB 类
	 * @return [type] [description]
	 */
	public function use_mongo()
	{
		// $data = $this->mongo_db->get_one('');
	}
}
