<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends AnotherClass
{
    public function __construct() 
    {
        parent::__construct();

        if (isset($this->session->log)) {
            if ($this->session->log != 'admin') {
                $this->session->set_flashdata('error', 'Harap Login Sebagai Administrator!');
            }
        } else {
            $this->session->set_flashdata('error', 'Harap Login Terlebih Dahulu!');
        }
    }

    public function index()
    {
        $this->load->view('admin/home');
    }
}

?>