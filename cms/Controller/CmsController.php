<?php

namespace Cms\Controller;

use Engine\Controller;

/**
 * Class HomeController
 * @package Cms\Controller
 */
class CmsController extends Controller
{
    /**
     * HomeController constructor.
     * @param $di
     */
    public function __construct($di)
    {
        parent::__construct($di);
    }
}