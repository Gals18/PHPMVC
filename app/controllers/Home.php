<?php

class Home extends Controller {
    public function index(){
        // return 'home.index.php';
        $data['judul']= 'home';
        $this->view('templates/header',$data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}