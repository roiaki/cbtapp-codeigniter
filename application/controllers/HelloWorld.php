<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helloworld extends CI_Controller {

    public function index()
    {
        $data["message"] = "Hello World！";
        $this->load->view("index", $data);
    }

}