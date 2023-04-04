<?php

include_once 'database/mysql.php';

class Todo{
    public $id;
    public $task;

    public static function list(){
        $consulta = MySql::getInstance()->query("SELECT * FROM todos;");
        if ($consulta) {
            return $consulta->fetchAll(PDO::FETCH_CLASS, 'Todo');
        }
        return false;
    }
    
    public static function find($id){
        $query = MySql::getInstance()->prepare('SELECT * FROM todos WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);        
        $query->execute();
        if ($query) {
            return $query->fetchObject('Todo');
        }
        return false;
    }
    
    public static function insert($task){
        $stmt = MySql::getInstance()->prepare('INSERT INTO todos (task) VALUES(:task)');
        return $stmt->execute(array(':task' => $task));
    }
    
    public static function delete($id){
        $stmt = MySql::getInstance()->prepare('DELETE FROM todos WHERE id = :id');
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
    public static function update($id, $task){
        $stmt = MySql::getInstance()->prepare('UPDATE todos SET task = :task WHERE id = :id');
        return $stmt->execute(array(
        ':id'   => $id,
        ':task' => $task
        ));
    }


}
