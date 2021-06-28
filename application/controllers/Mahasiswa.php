<?php 

    class Mahasiswa extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Mahasiswa_model');
            $this->load->library('form_validation');

        }

        public function index()
        {
            $data['judul'] = 'Mahasiswa';

            $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('templates/footer');
        }

        public function tambah()
        {
            $data['judul'] = 'Tambah Data Mahasiswa';

            $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
            $this->form_validation->set_rules('nama', 'Nama', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('mahasiswa/tambah', $data);
                $this->load->view('templates/footer');
            } else {
                $this->Mahasiswa_model->tambahDataMahasiswa();
                $this->session->set_flashdata('flash','Ditambahkan');
                redirect('mahasiswa');
            }
        }

        public function hapus($id)
        {
            $this->Mahasiswa_model->hapusDataMahasiswa($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('mahasiswa');
        }
    }

?>