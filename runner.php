<?php
/**
 * @author: Sascha Meyer, Moonbird IT
 */
ob_start();

session_start();

// we need to change the working directory to not work in the inclusion context
// (runner.php being included in public/index.php)
chdir(getcwd().DIRECTORY_SEPARATOR.'..');

include('framework.php');


try
{
	uses(
		'de.moonbird.web.controller.abstract.ControllerLoader',
		'de.moonbird.common.configuration.Configuration',
		'de.moonbird.interfaces.IRunnable'
	);
}
catch (IllegalArgumentException $e)
{
	die("Invalid uses() have been passed to the runner.");
}


/* 
This line triggers loading the required controller for the given task. 

"c" refers to the parameter in the URL which will point to the required controller.
It always expects the controllers to be found in the sub-folder below "src" stated in "etc/STAGE/project.ini"'s "namespace" entry.

Example: 
"c=home.Home" points to the controller "src/template/home/HomeController.class.php" in this template project. 
	
If no controller has been passed, the default controller will be loaded (third parameter).
*/
$controller = ControllerLoader::load(Configuration::get('project', 'namespace'), 'c','home.Home');

if ($controller) {
  $controller->run();
}