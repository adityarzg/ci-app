<?php 

    class Mahasiswa_model extends CI_Model
    {
        public function getAllMahasiswa()
        {
            return $this->db->get('mahasiswa')->result_array();
        }

        public function tambahDataMahasiswa()
        {
            $data = [
                "nim" => $this->input->post('nim', true), 
                "nama" => $this->input->post('nama', true), 
                "jurusan" => $this->input->post('jurusan')
            ];

            $this->db->insert('mahasiswa', $data);
        }

        public function hapusDataMahasiswa($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('mahasiswa');
        }
    }

?>