<?php

namespace app\controllers;

class MainController extends AppController
{

    //    public $layout = 'main';

    public function indexAction()
    {
        //        $this->layout = false;
        //        $this->layout = 'main';
        //        $this->view = 'test';
        $name = 'zapaDEV';
        $this->set([
            'name' => $name,
        ]);
    }

}