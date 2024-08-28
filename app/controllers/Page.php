<?php

class Page extends Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Page';
        $this->view('templates/header', $data);
        $this->view('page/index', $data);
        $this->view('templates/footer', $data);
    }
}
