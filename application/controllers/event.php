<?php

class Event extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Event_model');
        $this->load->model('user_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));

        //        if (ENVIRONMENT === 'development') {
        //            $this->output->enable_profiler();
        //        }
    }

    // 出来事一覧画面表示
    public function index()
    {
        $data['html_title'] = '出来事一覧';

        $data['results'] = $this->Event_model->get_events();
        $userdata = $this->session->all_userdata();
        $data['email'] = $userdata['email'];
        $data['user_id'] = $userdata['user_id'];
        $data['is_logged_in'] = $userdata['is_logged_in'];
        //var_dump($userdata['user_id']);

        $this->load->view('commons/head_view', $data);
        $this->load->view('events/index', $data);
    }

    // 作成画面遷移
    public function create()
    {
        $data['html_title'] = '新規作成';

        $data['user_id'] = $this->session->userdata('user_id');
        $this->load->view('commons/head_view', $data);
        $this->load->view('events/create', $data);
    }

    // 保存処理
    public function store()
    {
        // バリデーションチェック
        $this->form_validation->set_rules('title', 'タイトル', 'required');
        $this->form_validation->set_rules('content', '内容', 'required');

        if ($this->form_validation->run() === FALSE) {
            //$data['html_title'] = '新規作成';
            //$data['user_id'] = $this->session->userdata('user_id');
            //$this->load->view('commons/head_view', $data);
            //$this->load->view('events/create', $data);
            $this->create();
        } else {
            $user_id = $this->session->userdata('user_id');

            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $created_at = date("Y-m-d G:i:s");
            $updated_at = date("Y-m-d G:i:s");

            $data = [
                'user_id' => $user_id,
                'title' => $title,
                'content' => $content,
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ];
            // insert はmocelに分離しよう　どこまでMVCとするか？？？
            $this->db->insert('events', $data);

            redirect('event/index');
        }
    }

    // 詳細ページ表示処理
    public function show($id)
    {
        $data['html_title'] = '詳細';

        $data['user_id'] = $this->session->userdata('user_id');
        $data['event'] = $this->Event_model->get_event($id);
        $userdata = $this->session->all_userdata();

        $data['email'] = $userdata['email'];
        $data['user_id'] = $userdata['user_id'];
        $data['is_logged_in'] = $userdata['is_logged_in'];

        $this->load->view('commons/head_view', $data);
        $this->load->view('events/show', $data);
    }

    // 削除処理
    public function delete($id)
    {
        $user_id = $this->session->userdata('user_id');
        $event_id = $id;

        $this->db->delete('events', ['id' => $event_id, 'user_id' => $user_id]);

        redirect('event/index');
    }

    // 編集画面表示
    public function edit($id)
    {
        $data['html_title'] = '編集';

        $event_id = $id;
        $userdata = $this->session->all_userdata();

        $data['email'] = $userdata['email'];
        $data['user_id'] = $userdata['user_id'];
        $data['is_logged_in'] = $userdata['is_logged_in'];

        $data['user_id'] = $this->session->userdata('user_id');
        $data['event'] = $this->Event_model->get_event($event_id);

        $this->load->view('commons/head_view', $data);
        $this->load->view('events/edit', $data);
    }

    // 更新処理 バリデーションエラーの時どう書くか分からないので一旦バリデーションチェックを飛ばす
    public function update()
    {
        /*
        // バリデーションチェック
        $this->form_validation->set_rules('title', 'タイトル', 'required');
        $this->form_validation->set_rules('content', '内容', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['html_title'] = '編集';

            //$event_id = $id;
            $userdata = $this->session->all_userdata();

            $data['email'] = $userdata['email'];
            $data['user_id'] = $userdata['user_id'];
            $data['is_logged_in'] = $userdata['is_logged_in'];

            $data['user_id'] = $this->session->userdata('user_id');
            //$data['event'] = $this->Event_model->get_event($event_id);

            $this->load->view('commons/head_view', $data);
            $this->load->view('events/edit', $data);

        } else {
            $user_id = $this->session->userdata('user_id');
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $event_id = $this->input->post('event_id');
            $updated_at = date("Y-m-d G:i:s");

            $data = [
                'user_id' => $user_id,
                'title' => $title,
                'content' => $content,
                'updated_at' => $updated_at
            ];

            $this->db->where('id', $event_id);
            $this->db->update('events', $data);
            redirect('event/index');
        }
        */
            $user_id = $this->session->userdata('user_id');
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $event_id = $this->input->post('event_id');
            $updated_at = date("Y-m-d G:i:s");

            $data = [
                'user_id' => $user_id,
                'title' => $title,
                'content' => $content,
                'updated_at' => $updated_at
            ];

            $this->db->where('id', $event_id);
            $this->db->update('events', $data);
            redirect('event/index');
    }
}
