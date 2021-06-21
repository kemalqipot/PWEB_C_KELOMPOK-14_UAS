<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Beranda';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('template/header', $data);
        $this->view('home/index');
        $this->view('template/footer');
    }
}