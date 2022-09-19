<?php

use app\controllers\DefaultController;
use Pecee\SimpleRouter\SimpleRouter;


SimpleRouter::get('/', [DefaultController::class, 'index']);