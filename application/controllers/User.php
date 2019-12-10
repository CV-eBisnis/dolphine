<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data['user'] = $this->User_model->select();

        $this->load->view('admin/user', $data);
    }

    public function tambah()
    {
        $data = [
            'nama'      => $this->input->post('nama'), 
            'alamat'    => $this->input->post('alamat'),
            'no_hp'     => $this->input->post('no_hp'),
            'email'     => $this->input->post('email'),
            'password'  => $this->encryption->encrypt($this->input->post('password')),
            'level'     => $this->input->post('level')
        ];

        if ($this->User_model->insert($data)) {
            $this->session->set_flashdata('notif', 'Tambah User Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Tambah User Gagal!');
        }

        $this->back();
    }

    public function edit()
    {
        $id = ['id_user' => $this->input->post('id_user')];
        
        $data = [
            'nama'      => $this->input->post('nama'), 
            'alamat'    => $this->input->post('alamat'),
            'no_hp'     => $this->input->post('no_hp'),
            'email'     => $this->input->post('email'),
            'password'  => $this->encryption->encrypt($this->input->post('password')),
            'level'     => $this->input->post('level')
        ];

        if ($this->User_model->update($data, $id)) {
            $this->session->set_flashdata('notif', 'Edit User Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Edit User Gagal!');
        }

        $this->back();
    }

    public function hapus()
    {
        $id = ['id_user' => $this->uri->segment(3)];
        if ($this->User_model->delete($id)) {
            $this->session->set_flashdata('notif', 'Hapus User Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Hapus User Gagal!');
        }

        $this->back();
    }

    public function back()
    {
        if ($this->session->level == 'admin') {
            redirect('user');
        } else {
            redirect('home');
        }
    }

}

/* End of file User.php */
?>