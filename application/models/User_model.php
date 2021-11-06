<?php

class User_model extends CI_Model {

    // コンストラクタ　インスタンス作成と同時にdatamase()実行
    public function __construct()
    {
        $this->load->database();
    }

    // DBへユーザ情報をinsertする
    public function register_user()
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => md5( $this->input->post('password') )
        ];
        return $this->db->insert('users', $data);
    }

    // DBからユーザー情報を取得する
    public function get_user_login($email, $password)
    {
        $query = $this->db->get_where('users', ['email' => $email, 'password' => md5($password)] );
        return $query->row_array();
    }
}