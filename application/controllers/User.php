<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        //$this->load->helper('url');  // for anchor()
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }


    public function index()
    {
        $this->load->view('blogview');
    }

    public function register_view()
    {
        $this->load->view('user/register_view');
    }

    public function register()
    {

    }

    public function login_view()
    {
        $this->load->view('user/login_view');
    }
}
