<?php

namespace Core;

class Route
{
    public static function start()
    {
        // контроллер и действие по умолчанию
        $controllerName = self::getDefaultController();
        $actionName = self::getDefaultAction();

        // получаем имя контроллера
        if (key_exists('url', $_GET) && !empty($_GET['url'])) {
            $controllerName = $_GET['url'];
        }

        // подцепляем файл с классом модели (файла модели может и не быть)
        $file = strtolower($controllerName) . '.php';

        $modelPath =  $_SERVER['DOCUMENT_ROOT'] . "/application/models/" . $file;
        $modelClass = '\\Application\\Models\\' . ucfirst($controllerName);
        if (file_exists($modelPath)) {
            include $modelPath;

        }

        // подцепляем файл с классом контроллера
        $controllerPath = $_SERVER['DOCUMENT_ROOT'] . "/application/controllers/" . $file;
        if (file_exists($controllerPath)) {
            include $controllerPath;
        } else {
            Route::ErrorPage404();
        }

        $controllerClass = '\\Application\\Controllers\\' . ucfirst($controllerName);
        if (!class_exists($controllerClass)) {
            Route::ErrorPage404();
        }

        // создаем контроллер
        $controller = new $controllerClass;
        $action = $actionName . 'Action';
        if (method_exists($controller, $action)) {
            $model = null;
            if (class_exists($modelClass) && method_exists($modelClass, 'getData')) {
                $model = new $modelClass;
            }
            $controller->$action($model);
        } else {
            Route::ErrorPage404();
        }
    }

    public static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
        die();
    }

    protected static function getDefaultAction()
    {
        return 'index';
    }

    protected static function getDefaultController()
    {
        return 'Main';
    }
}
