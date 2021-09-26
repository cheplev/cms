<?php

namespace Admin\Controller;

/**
 * Class HomeController
 * @package Cms\Controller
 */
class ErrorController extends AdminController
{
    public function page404()
    {
        echo '404 Page';
    }
}