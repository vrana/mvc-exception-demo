<?php
require_once dirname(__FILE__) . "/BasePresenter.php";

class FeedPresenter extends BasePresenter {
	
	protected function startup() {
		parent::startup();
		$this->absoluteUrls = TRUE;
	}
	
	public function renderSitemap() {
		$this->template->items = array();
		$templates = glob("templates/*.phtml");
		foreach ($templates as $val) {
			$val = str_replace(".", ":", basename($val, ".phtml"));
			if (!preg_match('~@|^Error:|^Feed:~', $val)) {
				$this->template->items[] = array("loc" => $this->link($val));
			}
		}
	}
	
}
