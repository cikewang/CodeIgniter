<?php
/**
 * [smarty_function_siteurl 自定义Smarty函数，用户页面中获取绝对URL路径]
 * @param  [type] $uri [description]
 * @return [type]      [description]
 */
function smarty_function_site_url($uri){

	return site_url($uri);
}