<?php

namespace app\controllers;

use app\models\Main;
use \R;
use vendor\core\App;

class MainController extends AppController
{

    //    public $layout = 'main';

    public function indexAction()
    {
        App::$app->getList();

        $model = new Main;

        R::fancyDebug(true);

        $posts = App::$app->cache->get('posts');
        if ( ! $posts) {
            $posts = R::findAll('posts');
            App::$app->cache->set('posts', $posts, 3600 * 24);
        }


        //        $posts = $model->findAll("SELECT * FROM posts");
        //        $post = $model->findOne(2);
        //        $data = $model->findBySql("SELECT * FROM {$model->table} ORDER BY id DESC LIMIT 2");
        //        $data = $model->findBySql("SELECT * FROM {$model->table} WHERE title LIKE ?", ['%JQuery%']);
        //        $data = $model->findLike('JQ', 'title');

        //        debug($posts);

        $title = 'INDEX default action [MAIN controller]';
        $this->setMeta('Home page', 'Home description', 'home');
        $meta = $this->meta;
        $this->set([
            'title' => $title,
            'posts' => $posts,
            'meta'  => $meta,
        ]);
    }

    public function testAction()
    {

        $title = 'TEST action [MAIN controller]';
        $this->set([
            'title' => $title,
        ]);
    }

}