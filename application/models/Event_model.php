<?php

class Event_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_event()
    {
        $user_id = $this->session->userdata('user_id');
        //var_dump("user_id". $user_id);
        $query = $this->db->get_where('events', ['user_id' => $user_id]);
        
        return $query->result();
    }

}