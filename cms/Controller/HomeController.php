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
        $data = ['name' => 'chep'];
        $this->view->render('index', $data);
        // echo 'Index Page';
    }

    public function news($id)
    {
        echo $id;
    }
}