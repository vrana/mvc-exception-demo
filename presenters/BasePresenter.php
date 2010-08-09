<?php
abstract class BasePresenter extends Presenter {
	public $oldLayoutMode = FALSE;
	
	public function templatePrepareFilters($template) {
		$template->registerFilter('TemplateFilters::removePhp');
		parent::templatePrepareFilters($template);
	}
	
}
