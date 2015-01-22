<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'libraries/smarty/Smarty.class.php');

class Tp extends Smarty {

	public function __construct()
	{
		parent::__construct();

		$this->debugging = false;
		$this->caching = false;
		$this->cache_lifetime = 120;
		$this->template_dir = APPPATH.'views';
		$this->compile_dir = APPPATH.'cache/templates_c/';
		$this->left_delimiter = '{-';
		$this->right_delimiter = '-}';	
	}
}
