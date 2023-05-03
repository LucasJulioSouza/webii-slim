<?php
    use app\controllers\MessageController;

    $app->get('/user', 'app\controllers\MessageController:index');

    $app->post('/user/create', 'app\controllers\MessageController:create');

?>