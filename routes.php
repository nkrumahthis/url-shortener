<?php

$router->get('/', 'index.php');

$router->post('/shorten', 'url/create.php');