<?php

define('BASE_SERVER', __DIR__);
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'public');

require_once('app/controllers/SalasController.php');

if ($_GET['action'] == '')
	$_GET['action'] = 'salas';

$urlParts = explode('/', $_GET['action']);
$salasController = new SalasController();

switch ($urlParts[0]) {
	case 'salas':
		$salasController->showAll();
		break;
	case 'autenticar':
		$salasController->autenticar($urlParts[1]);
		break;
	case 'imagen':
		$salasController->mostrarImagen($urlParts[1]);
		break;
		case 'captcha':
		$salasController->getCaptcha();
		break;
	case 'registrar':
		$salasController->registrar();
		break;
	// case 'home':
	// 	$taskController->showTasks();
	// 	break;
	// case 'tasks':
	// 	$taskController->showTasks();
	// 	break;
	// case 'login':
	// 	$userController->showLogin();
	// 	break;
	// case 'formRegistro':
	// 	$userController->showRegistrar();
	// 	break;
	// case 'registrar':
	// 	$userController->registrar();
	// 	break;
	// case 'verify':
	// 	$userController->verify();
	// 	break;
	// case 'logout':
	// 	$userController->logout();
	default:
		echo '<h1>Error 404 - Page not found </h1>';
		break;
}