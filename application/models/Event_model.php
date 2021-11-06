<?php

class Event_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    // 出来事を全て取得
    public function get_events()
    {
        $user_id = $this->session->userdata('user_id');
        //var_dump("user_id". $user_id);
        $query = $this->db->get_where('events', ['user_id' => $user_id]);
        
        return $query->result();
    }

    // 出来事を1件取得
    public function get_event($event_id)
    {
        $user_id = $this->session->userdata('user_id');
        $query = $this->db->get_where('events', ['user_id' => $user_id, 'id' => $event_id] );
        
        return $query->result();
    }

    public function update()
    {
        
    }

}