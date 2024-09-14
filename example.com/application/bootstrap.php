<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/core/model.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/view.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/controller.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/route.php';

\Core\Route::start();
