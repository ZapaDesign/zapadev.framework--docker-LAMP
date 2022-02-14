<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{

    //    public $layout = 'main';

    public function indexAction()
    {
        $model = new Main;
        $posts = $model->findAll("SELECT * FROM posts");

        $title = 'PAGE TITLE';
        $this->set([
            'title' => $title,
            'posts' => $posts,
        ]);
    }

}