<?php

namespace app\controllers;

use app\models\Main;
use R;

class MainController extends AppController
{

    //    public $layout = 'main';

    public function indexAction()
    {
        $model = new Main;
        $posts = R::findAll('posts');



//        $posts = $model->findAll("SELECT * FROM posts");
//        $post = $model->findOne(2);
//        $data = $model->findBySql("SELECT * FROM {$model->table} ORDER BY id DESC LIMIT 2");
//        $data = $model->findBySql("SELECT * FROM {$model->table} WHERE title LIKE ?", ['%JQuery%']);
//        $data = $model->findLike('JQ', 'title');

        debug($posts);

        $title = 'PAGE TITLE';
        $this->set([
            'title' => $title,
            'posts' => $posts,
        ]);
    }

}