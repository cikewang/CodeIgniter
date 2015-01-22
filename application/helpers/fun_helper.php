<?php
/**
 * 返回JSON_ENCODE 信息
 */
if(! function_exists('report_json'))
{
	function report_json($msg)
	{
		echo json_encode($msg);
		exit;
	}
}

if(! function_exists('alert_return'))
{
	function alert_return($msg, $go_back = true)
	{	
		if($go_back)
		{
			echo "<script>alert('$msg');history.go(-1);</script>";		
			exit;
		}
		else
		{
			echo "<script>alert('$msg');</script>";
		}
	}
}


/**
 * 调试输出
 */
if(! function_exists('p'))
{
	function p($val, $next = FALSE)
	{	
		echo "<pre/>";
		echo "==================调试输出 开始======================<br>";
		print_r($val);
		echo "<br>==================调试输出 结束======================<br>";
		
		if(! $next)
			exit;
	}
}


/**
 * [filterMongoData 过滤MongoDB数据，主要转换Mongo ID]
 * @param  [type] $arr [description]
 * @return [type]      [description]
 */
if(! function_exists('p'))
{
	function filterMongoData(&$arr) 
	{
		if (!is_array ($arr)) 
		{
			return false;
		}
		
		foreach ($arr as $key => &$val ) 
		{
			if (is_array ($val)) 
			{
				return $this->filterMongoData($val);
			}
			elseif(is_object($val) && $key == '_id')
			{
				$id_arr = (array)$val;
				$val = htmlspecialchars($id_arr['$id'], ENT_QUOTES, 'UTF-8');
			} 
			else 
			{
				$val = htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
			}
		}
		return $arr;
	}
}

/**
 * 获取请求ip
 *
 * @return ip地址
 */
if (! function_exists('ip')) {
	function ip() {
		if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
			$ip = getenv('HTTP_CLIENT_IP');
		} elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
			$ip = getenv('HTTP_X_FORWARDED_FOR');
		} elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
			$ip = getenv('REMOTE_ADDR');
		} elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
			$ip = $_SERVER['REMOTE_ADDR'];
		}

		return preg_match ( '/[\d\.]{7,15}/', $ip, $matches ) ? $matches [0] : '';
	}
}

/**
 * 读取缓存，默认为文件缓存，不加载缓存配置。
 * @param string $name 缓存名称
 * @param $filepath 数据路径（模块名称） caches/cache_$filepath/
 * @param string $config 配置名称
 */
if(! function_exists('getcache'))
{
	function getcache($name, $filepath='', $type='file', $config='')
	{
		
	}
}

if(! function_exists('get_sysinfo'))
{
	function get_sysinfo() {
		$sys_info['os']             = PHP_OS;
		$sys_info['zlib']           = function_exists('gzclose');//zlib
		$sys_info['safe_mode']      = (boolean) ini_get('safe_mode');//safe_mode = Off
		$sys_info['safe_mode_gid']  = (boolean) ini_get('safe_mode_gid');//safe_mode_gid = Off
		$sys_info['timezone']       = function_exists("date_default_timezone_get") ? date_default_timezone_get() : 'no_setting';
		$sys_info['socket']         = function_exists('fsockopen') ;
		$sys_info['web_server']     = $_SERVER['SERVER_SOFTWARE'];
		$sys_info['phpv']           = phpversion();	
		$sys_info['fileupload']     = @ini_get('file_uploads') ? ini_get('upload_max_filesize') :'unknown';
		return $sys_info;
	}	
}

/**
 * 组合SQL语句 和 WHERE条件数据
 * @param  array  $data [description]
 * @return [type]       [description]
 */
if(! function_exists('crate_sql_where'))
{	
	function crate_sql_where(array $data = array())
	{	
		$where['where_sql'] = '';
		$where['where_data'] = array();
		
		if(!is_array($data) || count($data) <= 0){
			return '';
		}

		foreach ($data as $key => $value) 
		{
			$where['where_sql'] .= " AND `{$key}` = ?";

			array_push($where['where_data'], $value);
		}

		return $where;
	}
}

