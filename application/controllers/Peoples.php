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

            //load library pagination
            $this->load->library('pagination');

            //ambil data keyword search
            if ($this->input->post('submit')) {
                $data['keyword'] =  $this->input->post('keyword');
                $this->session->set_userdata('keyword', $data['keyword']);
            }else {
                $data['keyword'] = $this->session->userdata('keyword');
            }

            //conig pagination search
            $this->db->like('nama', $data['keyword']);
            $this->db->or_like('email', $data['keyword']);
            $this->db->or_like('perusahaan', $data['keyword']);
            $this->db->from('peoples');
            
            //config pagination
            $config['base_url'] = 'https://localhost/ci-app/peoples/index';
            $config['total_rows'] = $this->db->count_all_results();         //config results data
            $data['total_rows'] = $config['total_rows'];                    //config results data
            $config['per_page'] = 5;
            //$config['num_links'] = 4;
            
            //initializ pagination
            $this->pagination->initialize($config);
            
            $data['start'] = $this->uri->segment(3);
            $data['peoples'] = $this->Peoples_model->getPeoples($config['per_page'], $data['start'], $data['keyword']);
            
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

        public function ubah($id)
        {
            $data['judul'] = 'Ubah People';
            $data['peoples'] = $this->Peoples_model->getAllPeoplesById($id);

            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('peoples/ubah', $data);
                $this->load->view('templates/footer');
            } else {
                $this->Peoples_model->ubahDataPeoples();
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('peoples');
            }
        }

        public function hapus($id)
        {
            $this->Peoples_model->hapusDataPeoples($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('peoples');
        }

    }
    

?>