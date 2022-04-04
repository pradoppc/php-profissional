<?php
    namespace app\controllers;

    class User{
        public function show($params){
            if(!isset($params['user'])){
                return redirect('/');
            }

            $user = findBy('tb_usuarios', 'id_usuario', $params['user']);
            //$user = all('tb_usuarios', 'id_usuario');
            var_dump($user);
            die();
        }
    }

?>