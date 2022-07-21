<?php
//declare(strict_types=1);

namespace App\Controller;

class TestsController extends AppController
{
     public function index(){
        //return $this->redirect($this->Auth->logout());
        echo "in index function..";
        exit;
    }
    public function mytest(){
        //return $this->redirect($this->Auth->logout());
        //echo "hi..";
        //exit;
    }
}
