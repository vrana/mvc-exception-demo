<?php
class Article {
	static function findBests() {
		return dibi::fetchAll("SELECT * FROM [article] WHERE [best]");
	}
}
