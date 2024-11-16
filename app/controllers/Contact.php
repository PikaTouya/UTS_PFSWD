<?php 

class Contact extends Controller{

    public function index(){
        $data['judul'] = 'Contact';
        // $data['mhs'] = $this->model('Blog_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('contact/index', $data);
        $this->view('templates/footer');
    }
}