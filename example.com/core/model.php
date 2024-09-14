<?php

namespace Core;

use Bitrix\Main\NotImplementedException;

class Model
{
    public $string;

    public function __construct(){
        $this->string = "MVC + PHP = Awesome!";
    }

    public function getData()
    {
        throw new NotImplementedException();
    }
}
