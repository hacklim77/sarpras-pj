<?php

    class Crud extends CI_Model{

        public function add($data,$table)
        {
            $this->db->insert($table,$data);
        }

        public function edit()
        {
            
        }

        public function delete()
        {
            
        }

        public function read($table,$where)
        {
            return $this->db->get_where($table,$where);
        }
    }