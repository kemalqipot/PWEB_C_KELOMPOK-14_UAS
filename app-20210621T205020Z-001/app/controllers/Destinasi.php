<?php

class Destinasi extends Controller {
    public function index()
    {
        $data['judul'] = 'Destinasi';
        $this->view('template/header', $data);
        $this->view('Destinasi/index');
        $this->view('template/footer');
    }
}