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

            //config pagination
            $config['base_url'] = 'https://localhost/ci-app/peoples/index';
            $config['total_rows'] = $this->Peoples_model->getAllRowsPeoples();
            $config['per_page'] = 6;
            //$config['num_links'] = 4;
            
            //styling pagination
            $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination pagination-sm justify-content-end">';
            $config['full_tag_close'] = '</ul></nav>';
            
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<li class="page-item">';
            $config['first_tag_close'] = '</li>';
            
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tag_close'] = '</li>';
            
            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tag_close'] = '</li>';
            
            $config['prev_link'] = '&laquo';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tag_close'] = '</li>';
            
            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
            $config['cur_tag_close'] = '</a></li>';
            
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
            
            $config['attributes'] = array('class' => 'page-link');
            //styling end//
            
            //initializ pagination
            $this->pagination->initialize($config);
            
            $data['start'] = $this->uri->segment(3);
            $data['peoples'] = $this->Peoples_model->getPeoples($config['per_page'], $data['start']);
            
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