<?php

class User extends CI_Controller{

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
        $data['html_title'] = '登録';
        $this->load->view('commons/head_view',$data);
        $this->load->view('user/register_view');
    }

    public function login_view() 
    {
        $data['html_title'] = 'ログイン';
        $this->load->view('commons/head_view', $data);
        $this->load->view('user/login_view');
    }

    public function register()
    {
        $this->form_validation->set_rules('name', '名前', 'required');
        $this->form_validation->set_rules('email', 'メールアドレス', 'required');
        $this->form_validation->set_rules('password', 'パスワード', 'required');

        if ( $this->form_validation->run() === FALSE ) {
            $this->load->view('user/register');
        } else {
            if ( $this->user_model->sregister_user() ) {
                $this->session->set_flashdata('msg_success', '登録成功');
                redirect('user/login_view');
            } else {
                $this->session->set_flachdata('msg_error', '登録失敗');
                redirect('user/register_view');
            }
        }
        $this->load->view('user/register_view');
    }

    
 
   
}
?>