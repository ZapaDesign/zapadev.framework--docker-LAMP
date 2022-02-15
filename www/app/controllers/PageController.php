<?php

namespace app\controllers;

class PageController extends AppController
{
    public function indexAction()
    {
        $title = "INDEX default action [PAGE controller]";
        $this->setMeta('Page', 'Page description', 'page');
        $meta = $this->meta;
        $this->set([
            'title' => $title,
            'meta'  => $meta,
        ]);
    }

    public function viewAction()
    {
        $title = "VIEW action [PAGE controller]";
        $this->setMeta('About page', 'About description', 'about');
        $meta = $this->meta;
        $this->set([
            'title' => $title,
            'meta'  => $meta,
        ]);
    }

}