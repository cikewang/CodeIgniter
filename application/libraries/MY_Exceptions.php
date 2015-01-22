<?php

class MY_Exceptions {
	/**
	 * 提示信息页面跳转，跳转地址如果传入数组，页面会提示多个地址供用户选择，默认跳转地址为数组的第一个值，时间为5秒。
	 * showmessage('登录成功', array('默认跳转地址'=>'http://www.pbi.cn'));
	 * @param string $msg 提示信息
	 * @param mixed(string/array) $url_forward 跳转地址
	 * @param int $ms 跳转等待时间
	 */
	function showmessage($msg, $url_forward = 'goback', $ms = 1250, $dialog = '', $returnjs = '')
	{
		if($url_forward != 'goback' && strpos($url_forward, 'http') === FALSE)
		{
			$url_forward = site_url($url_forward);
		}  
		$ms = intval($ms) > 0 ? $ms : 1250;

		ob_end_flush();
		ob_start();
		include(APPPATH.'errors/showmessage.php');
		$buffer = ob_get_contents();
		ob_end_clean();
		echo $buffer;
		exit;
	}
}