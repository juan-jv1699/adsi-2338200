<?php

class Model extends DataBase {
    public function infoUsuario(){
        return array(
        'nombre' => 'Jeremias',
        'apellido' => 'Sprindfield'
        );
    }

    public function ListUsers(){
        return mysqli_query($this->conx,"SELECT * FROM users");
    }

    public function oneUser($id){
        return mysqli_query($this->conx,"SELECT * FROM users where id = $id");
    }
    
    public function deleteUser($id){
        $sql = "DELETE * FROM users where id = $id";
        $resp = mysqli_query($this->conx,$sql);
        return $resp;
    }
}