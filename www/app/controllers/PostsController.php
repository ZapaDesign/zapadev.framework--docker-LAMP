<?php

namespace app\controllers;

class PostsController extends AppController
{

    public function indexAction()
    {
        $title = "POSTS controller";
        $this->set([
            'title' => $title,
        ]);
    }
}