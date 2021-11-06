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
        
        $sql = "SELECT * 
                FROM 
                  events 
                WHERE 
                  user_id = $user_id 
                ORDER BY 
                  updated_at 
                DESC";
        $query = $this->db->query($sql);
             
        return $query->result();
    }

    // 出来事を1件取得
    public function get_event($event_id)
    {
        $user_id = $this->session->userdata('user_id');
        $query = $this->db->get_where('events', ['user_id' => $user_id, 'id' => $event_id] );
        
        return $query->row();
    }

    public function update()
    {

    }

}