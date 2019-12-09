<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
        $data['produk'] = $this->Produk_model->select();

        if (isset($this->session->id_user)) {
            $id['id_user'] = $this->session->id_user;
            $data['user'] = $this->User_model->select_row($id);

            $transaksi = $this->Transaksi_model->select_where($id);
        
            $data_produk = []; $data_jum = [];

            foreach ($transaksi as $t) {
                $detail = $this->Detail_model->select_where(['id_transaksi' => $t->id_transaksi]);

                $produks = []; $jums = [];

                foreach ($detail as $d) {
                    $id_produk['id_produk'] = $d->id_produk;
                    $produk = $this->Produk_model->select_row($id_produk)->nama_produk;
                    array_push($produks, $produk);

                    $jum = $d->jumlah_pembelian;
                    array_push($jums, $jum);
                }

                array_push($data_produk, $produks);

                array_push($data_jum, $jums);
            }
            
            $data['transaksi'] = $transaksi;
            $data['products'] = $data_produk;
            $data['jumlah'] = $data_jum;
        }

		$this->load->view('home', $data);
    }
    
    public function login()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $param = [
            'email'     => $email
        ];

        $data = $this->User_model->select_row($param);
        
        if (!empty($data) && $pass == $this->encryption->decrypt($data->password)) 
        {
            $this->session->set_userdata('id_user', $data->id_user);
            $this->session->set_userdata('nama', $data->nama);
            $this->session->set_userdata('level', $data->level);

            if ($this->session->level == 'admin') {
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
        
        $this->session->sess_destroy();

        redirect('home');        
    }

    public function daftar()
    {
        $data = [
            'nama'      => $this->input->post('nama'),
            'email'     => $this->input->post('email'), 
            'password'  => $this->encryption->encrypt($this->input->post('password')),
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
