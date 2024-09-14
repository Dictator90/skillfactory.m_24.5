<?php

namespace Application\Controllers;

use Core\Controller;
use Core\Model;

class Contacts extends Controller {

    function indexAction(Model $model = null)
    {
        $data = $model ? $model->getData() : [];
        $this->view->generate('contacts.php', 'template.php', $data);
    }
}
