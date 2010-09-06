<?php
class DataSourceException extends Exception {
}

class BaseModel {
	static function tryFetchAll($query) {
		try {
			$args = func_get_args();
			return call_user_func_array('dibi::fetchAll', $args);
		} catch (DibiException $e) {
			Debug::processException($e, true);
			throw new DataSourceException("Error in getting data.", 0, $e);
		}
	}
}
