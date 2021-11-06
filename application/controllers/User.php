<?php

class User extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));

        
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

    // ユーザー登録処理
    public function register()
    {
        $this->form_validation->set_rules('name', '名前', 'required');
        $this->form_validation->set_rules('email', 'メールアドレス', 'required');
        $this->form_validation->set_rules('password', 'パスワード', 'required');

        if ( $this->form_validation->run() === FALSE ) 
        {
            $this->load->view('user/register');
        } 
        else 
        {
            if ( $this->user_model->register_user() ) 
            {
                $this->session->set_flashdata('msg_success', '登録成功');
                redirect('user/login_view');
            } 
            else 
            {
                $this->session->set_flachdata('msg_error', '登録失敗');
                redirect('user/register_view');
            }
        }
        $this->load->view('user/register_view');
    }

    // ログイン処理
    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password','required|md5');
 
        if( $this->form_validation->run() === FALSE ) 
        { 
            $this->load->view('user/login_view');
        } 
        else 
        {
            if( $user = $this->user_model->get_user_login($email, $password) ) 
            {
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('is_logged_in', true);
                $_SESSION['user_id'] = $user['id'];
                //var_dump($_SESSION);
                //exit;
                redirect('event/index');
            } 
            else 
            {
                $this->session->set_flashdata('msg_error', 'Login credentials does match!');
                redirect('user/login_view');
            }
        }
    }
}
