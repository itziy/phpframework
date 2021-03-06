<?php
/**
* Apache服务器操作的简单实现相关的方法，使用此类的相关方法，必须使用Apache服务器
* @filename Apache.class.php
* @touch date 2014-07-28 11:00:17
* @author Rain<563268276@qq.com>
* @copyright 2014 http://www.94cto.com/
* @license http://www.apache.org/licenses/LICENSE-2.0   LICENSE-2.0
* @package Rain PHP Frame(RPF)
*/

defined('RPF_PATH') or exit();

/**
* Apache服务器操作的简单实现相关的方法，使用此类的相关方法，必须使用Apache服务器
*/
class Apache
{
	/**
	* 在本次请求结束后终止 apache 子进程
	* <code>Apache::terminate();</code>
	* @return bool 成功返回true，失败返回false
	*/
	public static function terminate()
	{
		return @apache_child_terminate();
	}

	/**
	* 获取apache加载的模块列表，一维数组
	* <code>Apache::modules();</code>
	* @return array 模块列表一维数组
	*/
	public static function modules()
	{
		return apache_get_modules();
	}

	/**
	* 获取apache版本信息
	* <code>Apache::version();</code>
	* @return string apache的版本信息
	*/
	public static function version()
	{
		return apache_get_version();
	}

	/**
	* 获取apache子进程的环境变量
	* <code>Apache::getenv('SERVER_ADDR');</code>
	* @param string $key key值
	* @param bool $walk_to_top key 是否递归到顶部，默认false
	* @return string apache的子进程的环境变量
	*/
	public static function get_env($key, $walk_to_top = false)
	{
		return apache_getenv($key, $walk_to_top);
	}

	/**
	* 设置apache子进程的环境变量
	* <code>Apache::("EXAMPLE_VAR", "Example Value");</code>
	* @param string $key key值
	* @param string $val 设置的值
	* @param bool $walk_to_top key 是否递归到顶部，默认false
	* @return bool 成功返回true，失败返回false
	*/
	public static function set_env($key, $val, $walk_to_top = false)
	{
		return apache_setenv($key, $val, $walk_to_top);
	}

	/**
	* 获取apache请求头信息
	* <code>Apache::request();</code>
	* @return array 一维数组
	*/
	public static function request()
	{
		return apache_request_headers();
	}

	/**
	* 获取apache返回头信息
	* <code>Apache::response();</code>
	* @return array 一维数组
	*/
	public static function response()
	{
		return apache_response_headers();
	}
}
