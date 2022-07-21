<?php
declare(strict_types=1);

namespace App\Controller;

class ArticlesController extends AppController
{
    public function list(){
        
       $article = $this->Articles->find('all')
                        ->contain('Comments');
        
        $this->set('articlelist',$article->toArray()) ;                     

    }
    
    public function product(){
       // $this->render('ecommerce_products');
        //echo "hi";exit;
    }
}
