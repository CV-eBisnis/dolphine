<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
        $data['produk'] = $this->Produk_model->select();

		$this->load->view('home', $data);
    }
    
    public function login()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $param = [
            'email'     => $email, 
            'password'  => $pass
        ];

        $data = $this->User_model->select_where($param);
        
        if (!empty($data)) 
        {
            foreach ($data as $d) 
            {
                $this->session->set_userdata('id_user', $d->id_user);
                $this->session->set_userdata('user', $d->nama);
                $this->session->set_userdata('level', $d->level);
            }

            if ($this->session->level == 1) {
                redirect('admin');
            } else {
                redirect('home');
            }
        }
        else 
        {
            $this->session->set_flashdata('notif', 'User Tidak Ditemukan!');
            redirect('home');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('log');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('user');
        
        redirect('home');        
    }

    public function daftar()
    {
        $data = [
            'nama'      => $this->input->post('nama'),
            'email'     => $this->input->post('email'), 
            'password'  => $this->input->post('password'),
            'level'     => 2
        ];

        if ($this->User_model->insert($data)) {
            $this->session->set_flashdata('notif', 'Tambah User Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Tambah User Gagal!');
        }

        redirect('home');
    }
}
