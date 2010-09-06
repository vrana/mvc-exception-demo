<?php
require_once APP_DIR . '/components/BestArticlesComponent.php';

abstract class BasePresenter extends Presenter {
	public $oldLayoutMode = FALSE;
	
	public function templatePrepareFilters($template) {
		$template->registerFilter('TemplateFilters::removePhp');
		parent::templatePrepareFilters($template);
	}
	
	function createComponent($name) {
		$class = $name . "Component";
		new $class($this, $name);
	}
	
}
