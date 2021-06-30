<?php 

    class Peoples extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Peoples_model');
            $this->load->library('form_validation');
        }

        public function index()
        {
            $data['judul'] = 'Peoples';

            $data['peoples'] = $this->Peoples_model->getAllPeoples();

            $this->load->view('templates/header', $data);
            $this->load->view('peoples/index', $data);
            $this->load->view('templates/footer');
        }

        public function tambah()
        {
            $data['judul'] = 'Tambah People';

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');

            if ($this->form_validation->run() == FALSE){
                $this->load->view('templates/header', $data);
                $this->load->view('peoples/tambah', $data);
                $this->load->view('templates/footer'); 
            }else {
                $this->Peoples_model->tambahDataPeoples();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('peoples');
            }
        }

        public function detail($id)
        {
            $data['judul'] = 'Detail Peoples';
            $data['peoples'] = $this->Peoples_model->getAllPeoplesById($id);;

            $this->load->view('templates/header', $data);
            $this->load->view('peoples/detail', $data);
            $this->load->view('templates/footer');
        }
    }
    

?>