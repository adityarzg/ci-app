<?php 

    class Home extends CI_Controller
    {
        public function index($nama = 'Guest')
        {
            $data['judul'] = 'Homepage';
            $data['nama'] = $nama;
            $this->load->view('templates/header', $data);
            $this->load->view('home/index', $data);
            $this->load->view('templates/footer');
        }
    }

?>