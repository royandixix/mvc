<?php

class About
{
    public function index($nama = 'Royandi', $status = 'Mahasiswa') 
    {
        echo "Hallo nama saya $nama, dan saya masi berstatus $status";
    }

    public function page() 
    {
        echo 'About/page';
    }
}
