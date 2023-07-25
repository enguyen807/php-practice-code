<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php')->middleware('auth');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');

$router->get('/note/edit', 'controllers/notes/edit.php');
$router->patch('/note', 'controllers/notes/update.php');


$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');

$router->get('/register', 'controllers/registration/create.php')->middleware('guest');
$router->post('/register', 'controllers/registration/store.php')->middleware('guest');

$router->get('/login', 'controllers/sessions/create.php')->middleware('guest');
$router->post('/login', 'controllers/sessions/store.php')->middleware('guest');
$router->delete('/logout', 'controllers/sessions/destroy.php')->middleware('auth');
