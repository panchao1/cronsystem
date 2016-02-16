<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 日志类
 * @author PanChao
 *
 * 1.file
 * 2.database
 * 3.memcache
 * 4.mongdb
 * 5.redis
 * eg: Logger::factory('database')->write(array)->execute('success');
 */

abstract class Logger {

	public static function factory($type = 'file') {

		$type = strtolower($type);

		if($type == 'file') {
			return new Logger_File();
		}
		if($type == 'database') {
			return new Logger_Database();
		}
		if($type == 'memcache') {
			return new Logger_Memcache();
		}
		if($type == 'redis') {
			return new Logger_Redis();
		}
		if($type == 'mongodb') {
			return new Logger_Mongodb();
		}

		return new Logger_File();
	}

	abstract public function write();

	abstract public function execute();
}
