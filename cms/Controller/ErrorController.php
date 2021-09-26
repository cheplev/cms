<?php

namespace Cms\Controller;

/**
 * Class HomeController
 * @package Cms\Controller
 */
class ErrorController extends CmsController
{
    public function page404()
    {
        echo '404 Page';
    }
}