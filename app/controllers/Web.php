<?php


class web extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Web Develotmend';
        $data['web'] = $this->model('Web_model')->getAllWeb();
        $this->view('templates/header', $data);
        $this->view('web/index', $data);
        $this->view('templates/footer',);
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Web Progaming';
        $data['web'] = $this->model('web_model')->getAllwebById($id);
        $this->view('templates/header', $data);
        $this->view('web/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Web_model')->tambahWeb($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/web');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/web');
            exit;
        }
    }
}
