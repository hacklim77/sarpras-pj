<?php

    class Crud extends CI_Model{

        public function add($data,$table)
        {
            $this->db->insert($table,$data);
        }

        public function edit($where,$table)
        {
            return $this->db->get($table,$where);
        }

        public function update($where,$data,$table)
        {
            $this->db->where($where);
            $this->db->update($table,$data);
        }

        public function delete()
        {

        }

        public function read($table,$where)
        {
            return $this->db->get_where($table,$where);
        }

        public function updatestok($table,$where)
        {
            return $this->db->get_where($table,$where);
        }
    }