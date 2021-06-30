<?php 

    class Peoples_model extends CI_Model
    {
        public function getAllPeoples()
        {
            return $this->db->get('peoples')->result_array();
        }

        public function getPeoples($limit, $start)
        {
            return $this->db->get('peoples', $limit, $start)->result_array();
        }

        public function getAllRowsPeoples()
        {
            return $this->db->get('peoples')->num_rows();
        }

        public function tambahDataPeoples()
        {
            $data = [
                "nama" => $this->input->post('nama', true),
                "email" => $this->input->post('email', true),
                "perusahaan" => $this->input->post('perusahaan', true),
                "alamat" => $this->input->post('alamat', true)
            ];

            $this->db->insert('peoples', $data);
        }

        public function getAllPeoplesById($id)
        {
            return $this->db->get_where('peoples', ['id' => $id])->row_array();
        }

        public function ubahDataPeoples()
        {
            $data = [
                "nama" => $this->input->post('nama', true),
                "email" => $this->input->post('email', true),
                "perusahaan" => $this->input->post('perusahaan', true),
                "alamat" => $this->input->post('alamat', true)
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('peoples', $data);
        }

        public function hapusDataPeoples($id)
        {
            //$this->db->where('id', $id);
            $this->db->delete('peoples', ['id' => $id]);
        }
    }
    

?>