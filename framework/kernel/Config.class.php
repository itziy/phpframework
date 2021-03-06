<?php
/**
* 配置文件读/写操作类 
* @filename Config.class.php
* @touch date 2014-07-23 16:38:09
* @author Rain<563268276@qq.com>
* @copyright 2014 http://www.94cto.com/
* @license http://www.apache.org/licenses/LICENSE-2.0   LICENSE-2.0
* @package Rain PHP Frame(RPF)
*/

/**
* 配置文件操作类
*/
class Config
{
	/**
	* 设置配置参数的方法
	* <code>
	* Config::set('MEM_HOST', '127.0.0.1');
	* </code>
	* @param string $key  配置的key
	* @param string  $val 配置的value
	* @return void 
	*/
	public static function set($key, $val)
	{
		Kernel::$_conf[$key] = $val;
	}

	/**
	* 获取配置中的值
	* <code>
	* Config::get('MEM_HOST');
	* </code>
	* @param string $key  配置的key
	* @return  string|bool 如果配置存在返回配置值，否则返回false
	*/
	public static function get($key)
	{
		return isset(Kernel::$_conf[$key]) ? Kernel::$_conf[$key] : false;
	}

	/**
	* 删除配置中的值
	* <code>
	* Config::rm('MEM_HOST');
	* </code>
	* @param string $key  配置的key
	* @return void
	*/
	public static function rm($key)
	{
		unset(Kernel::$_conf[$key]);
	}

	/**
	* 判断配置中的值是否设置
	* <code>
	* Config::exist('MEM_HOST');
	* </code>
	* @param string $key  配置的key
	* @return bool 存在返回true，不存在返回false
	*/
	public static function exist($key)
	{
		return isset(Kernel::$_conf[$key]) ? true : false;
	}
}
