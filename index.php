<?php
require_once './libs/Nette/loader.php';
require_once './libs/dibi/dibi.min.php';

define('APP_DIR', dirname(__FILE__));

Debug::enable();
$application = Environment::getApplication();
$application->errorPresenter = 'Error';

dibi::connect(array('driver' => 'sqlite3', 'file' => APP_DIR . '/models/data/blog.sqlite'));

$router = $application->getRouter();
$router[] = new Route('robots.txt', array('presenter' => 'Feed', 'action' => 'robots'));
$router[] = new Route('sitemap.xml', array('presenter' => 'Feed', 'action' => 'sitemap'));
$router[] = new Route('<presenter>/<action>/<id>/', array('presenter' => 'Homepage', 'action' => 'default', 'id' => NULL));

$application->run();
