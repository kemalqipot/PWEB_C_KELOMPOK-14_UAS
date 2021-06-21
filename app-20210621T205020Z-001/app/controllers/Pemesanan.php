<?php

class Pemesanan extends Controller {
    public function index()
    {
        $data['judul'] = 'Pemesanan';
        $data['Pesanan'] = $this->model('pemesanan_model')->getAllPemesanan();
        $this->view('template/header', $data);
        $this->view('Pemesanan/index');
        $this->view('template/footer');
    }
}