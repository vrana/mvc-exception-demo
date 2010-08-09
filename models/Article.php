<?php
class Article {
	static function findBests() {
		return dibi::query("SELECT * FROM [article] WHERE [best]")->fetchAll();
	}
}
