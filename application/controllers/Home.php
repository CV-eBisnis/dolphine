<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index()
	{
        $data['produk'] = $this->Produk_model->select();

        if (isset($this->session->id_user)) {
            $exist_detail = true; $exist_product = true; $exist_pengiriman = true;

            $id['id_user'] = $this->session->id_user;
            $data['user'] = $this->User_model->select_row($id);

            $transaksi = $this->Transaksi_model->select_where($id);
        
            $data_transaksi = []; $data_produk = []; $data_jum = []; $data_pengiriman = [];

            foreach ($transaksi as $t) {
                $detail = $this->Detail_model->select_where(['id_transaksi' => $t->id_transaksi]);
                if ($detail == null) {
                    $exist_detail = false;
                } else {
                    $produks = []; $jums = [];

                    foreach ($detail as $d) {
                        $id_produk['id_produk'] = $d->id_produk;
                        $produk = $this->Produk_model->select_row($id_produk);
                        if($produk == null) { 
                            $exist_product = false; 
                        } else {
                            $produk = $this->Produk_model->select_row($id_produk)->nama_produk;
                        }
                        array_push($produks, $produk);

                        $jum = $d->jumlah_pembelian;
                        array_push($jums, $jum);
                    }
                }
                
                $pengiriman = $this->Pengiriman_model->select_where(['id_transaksi' => $t->id_transaksi]);
                
                if ($exist_detail == true) {
                    if ($exist_product == true) {
                        array_push($data_transaksi, $t);
                        array_push($data_produk, $produks);
                        array_push($data_jum, $jums);
    
                        if ($exist_pengiriman == true) {
                            array_push($data_pengiriman, $pengiriman);
                        }
                    }
                }
            }

            $data['transaksi'] = $data_transaksi;
            $data['pengiriman'] = $data_pengiriman;
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
