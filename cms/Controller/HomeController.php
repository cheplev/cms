<?php

namespace Cms\Controller;


/**
 * Class HomeController
 * @package Cms\Controller
 */
class HomeController extends CmsController
{
    public function index()
    {
        echo 'Index Page';
    }

    public function news($id)
    {
        echo $id;
    }
}