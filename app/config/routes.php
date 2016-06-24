<?php

$router = new Phalcon\Mvc\Router();

$router->addGet("/}", array(
    'controller' => 'CompromissoController',
    'action' => 'index'
));

$router->addGet("/listar/{id:[0-9]+}}", array(
    'controller' => 'CompromissoController',
    'action' => 'listar'
));

$router->addPost("/adicionar}", array(
    'controller' => 'CompromissoController',
    'action' => 'adicionar'
));

$router->addPut("/editar/{id:[0-9]+}}", array(
    'controller' => 'CompromissoController',
    'action' => 'editar'
));

$router->addDelete("/remover}", array(
    'controller' => 'CompromissoController',
    'action' => 'remover'
));
