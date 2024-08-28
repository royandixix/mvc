<?php 


class web extends Controller 
{
    public function index()
    {
        $data['judul'] = 'Daftar Web Develotmend';
        $data['web'] = $this->model('Web_model')->getAllWeb();
        $this->view('templates/header', $data);
        $this->view('web/index', $data);
        $this->view('templates/footer', );
    }
}


?>