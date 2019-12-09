<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();

        if (isset($this->session->level)) {
            if ($this->session->level != 'admin') {
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
        
        $namas = []; $data_produk = []; $data_jum = [];

        foreach ($transaksi as $t) {
            $id_nama['id_user'] = $t->id_user;
            $nama = $this->User_model->select_row($id_nama)->nama;
            array_push($namas, $nama);

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
        
        $data = [
            'transaksi' => $transaksi,
            'nama'      => $namas,
            'produk'    => $data_produk,
            'jumlah'    => $data_jum
        ];
        
        $this->load->view('admin/transaksi', $data);
    }

    public function transaksi_status()
    {
        $id['id_transaksi'] = $this->uri->segment(4);
        $data['status_bayar'] = $this->uri->segment(3);

        if ($this->Transaksi_model->update($data, $id)) {
            $this->session->set_flashdata('notif', 'Ubah Status Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Ubah Status Gagal!');
        }

        redirect('admin/transaksi');
    }

    public function transaksi_hapus()
    {
        $data['id_transaksi'] = $this->uri->segment(3);
        if ($this->Transaksi_model->delete($data) && $this->Detail_model->delete($data)) {
            $this->session->set_flashdata('notif', 'Hapus Transaksi Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Hapus Transaksi Gagal!');
        }

        redirect('admin/transaksi','refresh');
    }

    public function laporan()
    {
        $data['transaksi'] = $this->Transaksi_model->select();
        $this->load->view('admin/laporan', $data);
    }
}

?>