<?php
class Controller {
    public $load;
    public $model;
    function __construct() {
    $this->load = new Load();
    $this->model = new Model();
    $this->welcome();
    }

    function inicio() {
    $datos = $this->model->infoUsuario();
    $this->load->view('welcome.php', $datos);
    }

    private function welcome() {
        if($_GET){
            if($_GET['method']=='show'){
                $this->show();   
            }
            if($_GET['method']=='delete'){
                $this->delete();   
            }
            if($_GET['method']=='edit'){
                $this->edit();   
            }
        }
        else {
            $data = $this->model->ListUsers();
            $this->load->view('welcome.php', $data); 
        }
    }

    public function show(){
            $id = $_GET['id'];
            $data = $this->model->oneUser($id);
            $this->load->view('infoUser.php', $data);
    }
    public function edit(){
            $id = $_GET['id'];
            $data = $this->model->oneUser($id);
            $this->load->view('editUser.php', $data);
    }
    public function delete(){
            $id = $_GET['id'];
            $data = $this->model->deleteUser($id);
            $this->load->view('infoUser.php', $data);
    }   

}