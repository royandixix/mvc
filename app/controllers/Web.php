<?php
class web extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Web Develotmend';
        $data['web'] = $this->model('Web_model')->getAllWeb();
        $this->view('templates/header', $data);
        $this->view('web/index', $data);
        $this->view('templates/footer');
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
        // Cek apakah request method adalah POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;

            // Proses data yang diterima
            if ($this->model('Web_model')->tambahWeb($data) > 0) {
                Flasher::setFlash('Berhasil', 'di tambahkan', 'success');
            } else {
                Flasher::setFlash('Gagal', 'di tambahkan', 'danger');
            }

            header('Location: ' . BASEURL . '/web');
            exit;
        } else {
            // Jika bukan metode POST, redirect atau tampilkan pesan error
            header('Location: ' . BASEURL . '/web');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('web_model')->deleteWeb($id) > 0) {
            Flasher::setFlash('Berhasil', 'di hapus', 'warning');
            header('Location: ' . BASEURL . '/web');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'di hapus', 'danger');
            header('Location: ' . BASEURL . '/web');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('web_model')->getAllWebById($_POST['id']));
    }

    public function edit()
    {
        // Cek apakah request method adalah POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Panggil metode edit dari model dengan data
            if ($this->model('Web_model')->editWeb($_POST) > 0) {
                Flasher::setFlash('Berhasil', 'diubah', 'success');
            } else {
                Flasher::setFlash('Gagal', 'diubah', 'danger');
            }

            header('Location: ' . BASEURL . '/web');
            exit;
        } else {
            // Jika bukan metode POST, redirect atau tampilkan pesan error
            header('Location: ' . BASEURL . '/web');
            exit;
        }
    }
}
