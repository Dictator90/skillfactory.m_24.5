<?php

namespace Core;

class View
{
    function generate($contentView, $template, $data = null)
    {
        ob_start();
        include $_SERVER['DOCUMENT_ROOT'] . '/application/views/' . $contentView;
        $contentView = ob_get_clean();

        include $_SERVER['DOCUMENT_ROOT'] . '/application/views/' . $template;
    }
}
