<?php
use Phroute\Phroute\RouteCollector;
$url = !isset($_GET['url']) ? "/" : $_GET['url'];
$router = new RouteCollector();

$router->get('/', [App\Controllers\HomeController::class, 'index']);
$router->get('/admin', [App\Controllers\HomeController::class, 'adminLayout']);

/**Tài khoản*/
$router->get('danh-sach-tk', [App\Controllers\UserController::class, 'listUser']);
$router->get('tao-tk', [App\Controllers\UserController::class, 'userAddForm']);
$router->post('tao-tk', [App\Controllers\UserController::class, 'addNewUser']);
$router->get('sua-tk/{id}', [App\Controllers\UserController::class, 'userEditForm']);
$router->post('sua-tk/{id}', [App\Controllers\UserController::class, 'saveEditUser']);
$router->get('xoa-tk/{id}', [App\Controllers\UserController::class, 'removeUser']);

/**Sản phẩm*/
$router->get('danh-sach-sp', [App\Controllers\ProductController::class, 'listPro']);
$router->get('them-sp', [App\Controllers\ProductController::class, 'proAddForm']);
$router->post('them-sp', [App\Controllers\ProductController::class, 'addNewPro']);
$router->get('sua-sp/{id}', [App\Controllers\ProductController::class, 'proEditForm']);
$router->post('sua-sp/{id}', [App\Controllers\ProductController::class, 'saveEditpro']);
$router->get('xoa-sp/{id}', [App\Controllers\ProductController::class, 'removePro']);

/**Danh mục*/
$router->get('danh-sach-dm', [App\Controllers\CategoryController::class, 'listDm']);
$router->get('them-dm', [App\Controllers\CategoryController::class, 'dmAddForm']);
$router->post('them-dm', [App\Controllers\CategoryController::class, 'addNewDm']);
$router->get('sua-dm/{id}', [App\Controllers\CategoryController::class, 'dmEditForm']);
$router->post('sua-dm/{id}', [App\Controllers\CategoryController::class, 'saveEditdm']);
$router->get('xoa-dm/{id}', [App\Controllers\CategoryController::class, 'removeDm']);


$router->get('lst-pro',[App\Controllers\HomeController::class,'list_promp']);
$router->get('lst-cate',[App\Controllers\HomeController::class,'list_promp']);
$router->get('detailpro/{id}', [App\Controllers\HomeController::class, 'detail_promp']);
$router->get('dmsp/{id}', [App\Controllers\HomeController::class, 'dmsp']);
// $router->get('listcatepro/{id}', [App\Controllers\HomeController::class, 'list_procatemp']);




$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
echo $response;


?>