<?php
class Blog extends CI_Controller {

    public function index()
    {
        //echo 'Hello World!';
        //$this->load->view('blogview');
        //$data['title'] = "My Real Titleだよ！";
        //$data['heading'] = "My Real Headingだよ！";
        //$this->load->view('blogview', $data);
        $data['todo_list'] = ['綺麗な家', 'call Mom', 'Run Errands'];

        $data['title'] = "test";
        $data['heading'] = "testtest";

        $this->load->view('blogview', $data);
    }


    public function comments()
    {
        echo 'LooK Look Look';
    }
}
?>