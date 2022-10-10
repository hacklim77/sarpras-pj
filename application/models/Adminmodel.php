<?php

    class Adminmodel extends CI_Model{

        public function getUser($id)
        {
            $this->db->select('*');
            $this->db->where('username',$id);
            $this->db->from('user');
            $q = $this->db->get();
            return $q->result();
        }

        public function getses()
        {
            $this->db->select('*');
            $this->db->where('username');
            $this->db->from('user');
            $q = $this->db->get();
            return $q->result();
        }

        public function getAll()
        {
            $this->db->get('user')->result_array();
        }


    }