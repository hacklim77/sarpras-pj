<?php

    function cek_login()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('username');

        if($user_session){
            redirect('admin/dashboard');
        }
    }

    function cek_not_login()
    {
        $ci =& get_instance();
        $user_session = $ci->session->userdata('username');

        if(!$user_session){
            redirect('admin/login');
        }
    }

    function cek_admin()
    {
        $ci =& get_instance();
        $ci->load->library('fungsi');
    }