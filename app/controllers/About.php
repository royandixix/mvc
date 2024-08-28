<?php

class About extends Controller
{
    public function index($nama = 'Royandi', $status = 'Mahasiswa', $umur = 21)
    {
        // echo "Hallo nama saya $nama, dan saya masi berstatus $status, dan umur saya ,$umur ";
        $data['nama'] = $nama;
        $data['berstatus'] = $status;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me ';
        
        // konekan degan header dan footer 

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        // echo 'About/page';
        $data ['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page'); 
        $this->view('templates/footer');

        
    }
    
}
