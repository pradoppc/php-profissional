<?php
    namespace app\controllers;

    class User{
        public function show($params){
            if(!isset($params['user'])){
                return redirect('/');
            }

            $user = findBy('tb_usuarios', 'id_usuario', $params['user']);
            $user = fetchAll('tb_usuarios', 'id_usuario');

        }
    }

?>