<?php

    function all($table, $field = '*'){
        try{
            $connect = connect();
            
            $query = $connect->query("select {$field} from {$table}");
            return $query->fetchAll();
        }catch(PDOException $e){
            var_dump($e->getMessage());
        }
    }
    function findBy($table, $field, $value, $fields = '*'){
        try{
            $connect = $connect();
            $prepare = $connect->prepare("select {$fields} from {$table} where {$field} = :{$field}");
            $prepare->execute([
                $field => $value
            ]);
            return $prepare->fetch();
        } catch (PDOException $e){
                var_dump($e->getMessage());
            }
    }


?>