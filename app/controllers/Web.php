<?php 

class web extends Controller 
{
    public function index()
    {
        $data['judul'] = 'Daftar Web Development'; // Corrected 'Develotmend' to 'Development'
        $data['web'] = $this->model('Web_model')->getAllWeb();
        $this->view('templates/header', $data);
        $this->view('web/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Web Programming';
        $data['web'] = $this->model('web_model')->getAllwebById($id);
        $this->view('templates/header', $data);
        $this->view('web/detail', $data);
        $this->view('templates/footer');
    }
    
    
}
?>
