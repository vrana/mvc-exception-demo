<?php

class TryControl extends Control {
	function render() {
		try {
			$this->getData();
			$this->template->setFile(__DIR__ . "/" . get_class($this) . ".phtml")->render();
		} catch (Exception $e) {
		}
	}
}

class BestArticlesComponent extends TryControl {
	function getData() {
		$this->template->bestArticles = Article::findBests();
	}
}
