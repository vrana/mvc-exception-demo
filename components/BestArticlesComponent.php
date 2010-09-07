<?php

abstract class TryControl extends Control {
	abstract function getData();
	
	function render() {
		try {
			$this->getData();
			$this->template->setFile(__DIR__ . "/" . get_class($this) . ".phtml")->render();
		} catch (DataSourceException $e) {
		}
	}
}

class BestArticlesComponent extends TryControl {
	function getData() {
		$this->template->bestArticles = Article::findBests();
	}
}
