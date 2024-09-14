<?php

namespace Application\Models;

use Core\Model;

class About extends Model
{
    public function getData()
    {
        return [
            'title' => 'О нас',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut autem delectus, deleniti dicta doloribus eius est expedita fugiat incidunt modi molestias natus, necessitatibus officia porro, quasi reiciendis sequi totam.'
        ];
    }
}
