<?php

class Bc_Db {

	protected static $tables = array();

	public static function &t($table) {
		if (!isset(self::$tables[$table])) {
			$class = 'Bc_Db_Table_'.ucfirst(strtolower($table));

			self::$tables[$table] = new $class();
			self::$tables[$table]->init();
		}

		return self::$tables[$table];
	}
}