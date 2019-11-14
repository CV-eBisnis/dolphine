<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
		$this->load->view('home');
    }
    
    public function login()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $param = array(
            'email'     => $email, 
            'password'  => $pass
        );

        $data = $this->User_model->select_where($param);
        
        if (!empty($data)) 
        {
            foreach ($data as $d) 
            {
                if ($d->level == 1) {
                    $this->session->set_userdata('log', 'admin');
                } else {
                    $this->session->set_userdata('log', 'user');
                }

                $this->session->set_userdata('id_user', $d->id_user);
                $this->session->set_userdata('user', $d->nama);
            }

            if ($this->session->log == 'admin') {
                redirect('admin');
            } else {
                $this->load->view('home');
            }
        }
        else 
        {
            $this->session->set_flashdata('error', 'User Tidak Ditemukan!');
            $this->load->view('home');
        }
    }

    public function logout()
    {
        # code...
    }

    public function daftar()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $param = array(
            'nama'      => $nama,
            'email'     => $email, 
            'password'  => $pass,
            'level'     => 2
        );

        $data = $this->User_model->insert($param);
    }
}
