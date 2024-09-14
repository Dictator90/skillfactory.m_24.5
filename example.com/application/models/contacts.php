<?php

namespace Application\Models;

use Core\Model;

class Contacts extends Model
{
    public function getData()
    {
        return [
            'title' => 'Наши контакты',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut autem delectus, deleniti dicta doloribus eius est expedita fugiat incidunt modi molestias natus, necessitatibus officia porro, quasi reiciendis sequi totam.',
            'phones' => [
                '8 (996) 168-85-75',
                '8 (800) 123-45-57'
            ]
        ];
    }
}
