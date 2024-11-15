<?php 

 class Services extends Controller{
    public function index()
    {
        $data['judul'] = 'Services';
        // $data['nama'] = $this->model('Services_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('services/index', $data);
        $this->view('templates/footer');
    }
    
}
