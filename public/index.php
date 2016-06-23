<?php

header('Content-Type: text/html; charset=utf-8');

$app = new \Phalcon\Mvc\Micro();

$app->get('/', function () {
    echo '<h1>Show de bola! Parabéns.</h1>';
    echo '<p>Você já conseguiu fazer o projeto base rodar. Agora, bora desenvolver a agenda :)</p>';
});

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, 'Not Found')->sendHeaders();
    echo 'A página que você solicitou não existe.';
});

$app->handle();
