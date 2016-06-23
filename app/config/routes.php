<?php

$router = new Phalcon\Mvc\Router();

// //Get elemets of relationship. Ex: /department/2/user
// $router->addGet('/:controller/:int/([a-zA-Z0-9_-]+)', array(
//     'controller'    => 1,
//     'action'        => "list",
//     'id'            => 2,
//     'relationship'  => 3
// ));

$router->addGet("/on}", array(
    'controller' => 'CompromissoController',
    'action' => 'on'
));

$router->addGet("/listar}", array(
    'controller' => 'CompromissoController',
    'action' => 'listar'
));

$router->addPost("/adicionar}", array(
    'controller' => 'CompromissoController',
    'action' => 'adicionar'
));

$router->addPut("/editar}", array(
    'controller' => 'CompromissoController',
    'action' => 'editar'
));

$router->addDelete("/remover}", array(
    'controller' => 'CompromissoController',
    'action' => 'remover'
));
