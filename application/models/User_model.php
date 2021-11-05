<?php

class User_model extends CI_Model {

    // コンストラクタ　インスタンス作成と同時にdatamase()実行
    public function __construct()
    {
        $this->load->database();
    }

    public function register_user()
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => md5( $this->input->post('password') )
        ];
        return $this->db->insert('user', $data);
    }
}