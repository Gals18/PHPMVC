<?php

class About{


    public function index($nama = 'Admin', $pekerjaan = 'Manage Account'){
        echo "Halo,nama saya $nama, saya adalah $pekerjaan";
    }
    public function page(){
        echo 'About/page';
    }

}