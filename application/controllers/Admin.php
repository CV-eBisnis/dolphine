<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();

        if (isset($this->session->log)) {
            if ($this->session->log != 'admin') {
                $this->session->set_flashdata('error', 'Harap Login Sebagai Administrator!');
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('error', 'Harap Login Terlebih Dahulu!');
            redirect('home');
        }
    }

    public function index()
    {
        $this->load->view('admin/home');
    }

    public function user()
    {
        $data = ['user' => $this->User_model->select()];

        $this->load->view('admin/user', $data);
    }

    public function user_tambah()
    {
        $data = array(
            'nama'      => $this->input->post('nama'), 
            'alamat'    => $this->input->post('alamat'),
            'no_hp'     => $this->input->post('no_hp'),
            'email'     => $this->input->post('email'),
            'password'  => $this->input->post('password')
        );

        if ($this->User_model->insert($data)) {
            $this->session->set_flashdata('error', 'Tambah User Berhasil!');
            redirect('admin/user');
        } else {
            $this->session->set_flashdata('error', 'Tambah User Gagal!');
            redirect('admin/user');
        }
    }

    public function user_edit()
    {
        $id = ['id_user' => $this->input->post('id_user')];
        
        $data = array(
            'nama'      => $this->input->post('nama'), 
            'alamat'    => $this->input->post('alamat'),
            'no_hp'     => $this->input->post('no_hp'),
            'email'     => $this->input->post('email'),
            'password'  => $this->input->post('password')
        );

        if ($this->User_model->update($data, $id)) {
            $this->session->set_flashdata('error', 'Edit User Berhasil!');
            redirect('admin/user');
        } else {
            $this->session->set_flashdata('error', 'Edit User Gagal!');
            redirect('admin/user');
        }
    }

    public function user_hapus()
    {
        $id = ['id_user' => $this->uri->segment(3)];
        if ($this->User_model->delete($id)) {
            $this->session->set_flashdata('error', 'Hapus User Berhasil!');
            redirect('admin/user');
        } else {
            $this->session->set_flashdata('error', 'Hapus User Gagal!');
            redirect('admin/user');
        }
    }

    public function produk()
    {
        $data = ['barang' => $this->Produk_model->select()];

        $this->load->view('admin/produk', $data);
    }


}

?>