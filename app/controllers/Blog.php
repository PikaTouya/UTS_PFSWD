<?php 

class Blog extends Controller{

    public function index(){
        $data['judul'] = 'Blog';
        // $data['mhs'] = $this->model('Blog_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }
}