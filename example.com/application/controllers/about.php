<?php

namespace Application\Controllers;

use Core\Controller;
use Core\Model;

class About extends Controller {

    function indexAction(Model $model = null)
    {
        $data = $model ? $model->getData() : [];
        $this->view->generate('about.php', 'template.php', $data);
    }
}
