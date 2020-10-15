<?php

namespace App\Controllers;

class Mahasiswa extends BaseController {
    public function index(){
        echo "pbw";
    }
    public function greeting(){
        $data["n"]=$this->request->getPost("nama");
        echo view("hallo", $data);
    }
}


?>