<?php

namespace Application\Controllers;

use Core\Controller;
use Core\Model;

class Main extends Controller {

    function indexAction(Model $model = null)
    {
        $data = $model ? $model->getData() : null;
        $this->view->generate('main.php', 'template.php', $data);
    }
}
