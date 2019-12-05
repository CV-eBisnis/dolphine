<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();

        if (isset($this->session->level)) {
            if ($this->session->level != 1) {
                $this->session->set_flashdata('notif', 'Harap Login Sebagai Administrator!');
                echo "<script>alert('Harap Login Sebagai Administrator!')</script>";
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('notif', 'Harap Login Terlebih Dahulu!');
            echo "<script>alert('Harap Login Terlebih Dahulu!'".$this->session->level.")</script>";
            redirect('home');
        }
    }

    public function index()
    {
        $this->load->view('admin/home');
    }

    public function user()
    {
        $data['user'] = $this->User_model->select();

        $this->load->view('admin/user', $data);
    }

    public function user_tambah()
    {
        $data = [
            'nama'      => $this->input->post('nama'), 
            'alamat'    => $this->input->post('alamat'),
            'no_hp'     => $this->input->post('no_hp'),
            'email'     => $this->input->post('email'),
            'password'  => $this->input->post('password'),
            'level'     => $this->input->post('level')
        ];

        if ($this->User_model->insert($data)) {
            $this->session->set_flashdata('notif', 'Tambah User Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Tambah User Gagal!');
        }

        redirect('admin/user');
    }

    public function user_edit()
    {
        $id = ['id_user' => $this->input->post('id_user')];
        
        $data = [
            'nama'      => $this->input->post('nama'), 
            'alamat'    => $this->input->post('alamat'),
            'no_hp'     => $this->input->post('no_hp'),
            'email'     => $this->input->post('email'),
            'password'  => $this->input->post('password'),
            'level'     => $this->input->post('level')
        ];

        if ($this->User_model->update($data, $id)) {
            $this->session->set_flashdata('notif', 'Edit User Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Edit User Gagal!');
        }

        redirect('admin/user');
    }

    public function user_hapus()
    {
        $id = ['id_user' => $this->uri->segment(3)];
        if ($this->User_model->delete($id)) {
            $this->session->set_flashdata('notif', 'Hapus User Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Hapus User Gagal!');
        }

        redirect('admin/user');
    }

    public function produk()
    {
        $data['produk'] = $this->Produk_model->select();

        $this->load->view('admin/produk', $data);
    }

    public function produk_tambah()
    {
        $config['upload_path']          = APPPATH.'../assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1366;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_produk')) {
            $this->session->set_flashdata('notif', $this->upload->display_errors());
        }
        else {
            $data = [
                'nama_produk'   => $this->input->post('nama_produk'),
                'foto_produk'   => $this->upload->data('file_name'),
                'varian_produk' => $this->input->post('varian_produk'),
                'harga_produk'  => $this->input->post('harga_produk')
            ];

            if ($this->Produk_model->insert($data)) {
                $this->session->set_flashdata('notif', 'Tambah Produk Berhasil!');
            } else {
                $this->session->set_flashdata('notif', 'Tambah Produk Gagal!');
            }
        }

        redirect('admin/produk');
    }

    public function produk_edit()
    {
        $config['upload_path']          = APPPATH.'../assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1366;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        $id['id_produk'] = $this->input->post('id_produk');
        
        $data = [
            'nama_produk'   => $this->input->post('nama_produk'),
            'varian_produk' => $this->input->post('varian_produk'),
            'harga_produk'  => $this->input->post('harga_produk')
        ];
        
        if (!empty($_FILES['foto_produk']['name'])) {
            if (!$this->upload->do_upload('foto_produk')) {
                $this->session->set_flashdata('notif', $this->upload->display_errors()); 
                redirect('admin/produk');
            } else {
                $data['foto_produk'] = $this->upload->data('file_name');

                $foto = $this->Produk_model->select_where($id);
                unlink(APPPATH.'../assets/images/'.$foto[0]->foto_produk);
            }
        }
        
        if ($this->Produk_model->update($data, $id)) {
            $this->session->set_flashdata('notif', 'Edit Produk Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Edit Produk Gagal!');
        }    
        
        redirect('admin/produk');
    }

    public function produk_hapus()
    {
        $id['id_produk'] = $this->uri->segment(3);

        $foto = $this->Produk_model->select_where($id);

        if ($this->Produk_model->delete($id)) {    
            unlink(APPPATH.'../assets/images/'.$foto[0]->foto_produk);

            $this->session->set_flashdata('notif', 'Hapus Produk Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Hapus Produk Gagal!');
        }
        
        redirect('admin/produk');
    }

    public function transaksi()
    {
        $transaksi = $this->Transaksi_model->select();
        // $namas = [];
        // foreach ($transaksi as $t) {
        //     $id['id_user'] = $transaksi->id_user;
        //     $nama = $this->User_model->select_where($id)['nama'];
        // }

        $data['transaksi'] = $transaksi;
        $this->load->view('admin/transaksi', $data);
    }

    public function transaksi_hapus()
    {
        # code...
    }
}

?>