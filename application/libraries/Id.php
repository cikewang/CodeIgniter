<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * All rights reserved.
 * Mongo DB 数据库获取ID 类
 * @author          libo <bli@pbicn.com>
 * @time            2014/11/21 11:05:20
 * @version         1.0.0
 */

class Id {
	
	/**
	 * [get_id 获得指定表中的新ID]
	 * @param  [type] $table [description]
	 * @param  [type] $id    [description]
	 * @return [type]        [description]
	 */
	public function get_id($table , $id)
	{
		$CI =& get_instance();
		$data = array('$inc'=>array($id=>1));
		$CI->mongo_db->update('id', $data, array('table' => $table ));

		return $CI->mongo_db->get_one( $id, 'id', array('table' => $table));
	}

	/**
	 * [create_id 创建ID，存在就返回不存在就创建一个新的ID在返回]
	 * @param  [type] $table [description]
	 * @param  [type] $id    [description]
	 * @return [type]        [description]
	 */
	public function create_id($table , $id)
	{
		$CI =& get_instance();

		$is_exist = $CI->mongo_db->get_one( $id, 'id', array('table' => $table));

		if($is_exist)
		{
			return $this->get_id($table , $id);;
		}

		$cbms['id'][$id] = 0;
		$cbms['id']['table'] = $table;
		$status = $CI->mongo_db->insert('id', $cbms['id']);

		return $this->get_id($table , $id);
	}

}