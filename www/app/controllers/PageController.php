<?php

namespace app\controllers;

class PageController extends AppController
{
    public function viewAction()
    {
        echo 'Page::view';
    }

    public function indexAction()
    {
        echo 'Page::index';
    }
}