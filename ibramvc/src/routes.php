<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'ProdutosController@add');
$router->post('/novo', 'ProdutosController@addAction');

$router->get('/produto/{id}/editar', 'ProdutosController@edit');
$router->post('/produto/{id}/editar', 'ProdutosController@editAction');

$router->get('/produto/{id}/excluir', 'ProdutosController@del');