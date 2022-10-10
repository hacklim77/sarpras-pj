<?php

    class Fungsi{
        protected $ci;

        function __construct()
        {
            $this->ci =& get_instance();
        }

        function user_login()
        {
            $this->ci->load->model('Adminmodel');
            $user_id = $this->ci->session->userdata('id_user');
            $user_data = $this->ci->Usermodel->get($user_id)->row();
            return $user_data;
        }
    }