<?php

namespace app\controllers;

class DefaultController
{
    public function index() {
        $title = "Hello World !";
        render('index.php', null, ['title' => $title]);
    }
}