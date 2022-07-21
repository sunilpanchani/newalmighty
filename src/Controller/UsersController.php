<?php
declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{
    public function login(){

        
        if ($this->Auth->user()) {
            // check if user already loggedIn redirect to dashboard
            
            return $this->redirect(['controller' => 'pages', 'action' => 'display']);
        } else {
            // check login post request
            if($this->request->is('post')){

                $business_id = $this->request->getData('email');
                $password = $this->request->getData('password');
                
                $userData = $this->Users->find()->where(['business_id'=>$business_id]);
                $userArray = $userData->toArray();

                $dbBusinessId = '';
                $dbPassword = '';
                foreach ($userArray as $dbData):
                    $dbBusinessId = $dbData['business_id'];
                    $dbPassword = $dbData['password'];
                endforeach;

                if($business_id == $dbBusinessId && $password == $dbPassword){
                    $user = [
                        'id' => 1,
                        'email' => $dbBusinessId,
                    ];
                    $this->Auth->setUser($user);
                    return $this->redirect(['controller' => 'users', 'action' => 'dashboard']);
                }else{
                    $this->Flash->error('Invalid Login Credentials.');
                }
            }
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function dashboard(){

    }
}
