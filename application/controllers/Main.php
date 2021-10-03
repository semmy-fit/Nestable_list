<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($page='home')
    {
        //$data['title'] = ucfirst($page);
        $this->load->view('templates/header.php');
        $this->load->view('main.php');
        $this->load->view('templates/footer.php');
    }
}

?>