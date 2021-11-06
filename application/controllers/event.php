<?php

class Event extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Event_model');
        $this->load->model('user_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));

        if (ENVIRONMENT === 'development') {
            $this->output->enable_profiler();
        }
    }
    
    public function index()
    {
        $data['results'] = $this->Event_model->get_events();
        $data['html_title'] ='出来事一覧';
        //exit;
        $userdata = $this->session->all_userdata();
        var_dump($userdata);
        $data['email'] = $userdata['email'];
        $data['user_id'] = $userdata['user_id'];
        $data['is_logged_in'] = $userdata['is_logged_in'];
        //var_dump($userdata['user_id']);

        $this->load->view('commons/head_view', $data);
        $this->load->view('events/index', $data);
    }

    public function create()
    {
        $data['user_id'] = $this->session->userdata('user_id');
        $data['html_title'] ='新規作成';
        $this->load->view('commons/head_view', $data);
        $this->load->view('events/create', $data);
    }

    public function store()
    {
        $user_id = $this->session->userdata('user_id');
        //var_dump($user_id);
        //exit;

        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $created_at = date("Y-m-d G:i:s");
        $updated_at = date("Y-m-d G:i:s");
        var_dump($title);
        $data = [
            'user_id' => $user_id,
            'title' => $title,
            'content' => $content,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ];
        // insert はmocelに分離しよう
        $this->db->insert('events', $data);

        redirect('event/index');
        
    }

    public function show($id)
    {
        $data['html_title'] ='詳細';
        
        $data['user_id'] = $this->session->userdata('user_id');
        $data['events'] = $this->Event_model->get_event($id);
        $this->load->view('commons/head_view', $data);
        $this->load->view('events/show', $data);
    }
}