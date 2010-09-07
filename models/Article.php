<?php
include __DIR__ . "/BaseModel.php";

class Article extends BaseModel {
	/**
	* @return array
	* @throws DataSourceException
	*/
	static function findBests() {
		return self::tryFetchAll("SELECT * FROM [article] WHERE [best]");
	}
}
