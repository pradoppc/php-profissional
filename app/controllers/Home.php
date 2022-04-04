<?php
    namespace app\controllers;

    class Home{
        public function index($params){
               $users = all('tb_usuarios');
               return [
               'view' => 'home.php',
               'data' => ['title' => 'Home', 'users' => $users] 
            ];
        }
    }

?>