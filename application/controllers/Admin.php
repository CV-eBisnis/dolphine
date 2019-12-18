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
        $data = $this->getTransaksi();
        
        $this->load->view('admin/transaksi', $data);
    }

    public function transaksi_status()
    {
        $status = $this->uri->segment(3);
        $id_transaksi = $this->uri->segment(4);
        
        $id['id_transaksi'] = $id_transaksi;
        $data['status_bayar'] = $status;

        if ($this->Transaksi_model->update($data, $id)) {
            $this->session->set_flashdata('notif', 'Ubah Status Berhasil!');

            if ($status == '1') {
                $data = [
                    'id_transaksi'      => $id_transaksi,
                    'status_pengiriman' => "Dikemas"
                ];

                if ($this->Pengiriman_model->insert($data)) {
                    $this->session->set_flashdata('notif', 'Ubah Status dan Tambah Pengiriman Berhasil!');
                } else {
                    $this->session->set_flashdata('notif', 'Tambah Pengiriman Gagal!');
                }
            }
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

    public function transaksi_laporan()
    {
        $data = $this->getTransaksi();
        
        $this->load->view('admin/laporan_transaksi', $data);
    }

    

    public function pengiriman()
    {
        $data = $this->getPengiriman();
        
        $this->load->view('admin/pengiriman', $data);
    }

    public function pengiriman_status()
    {
        $id['id_pengiriman'] = $this->input->post('id_pengiriman');
        $status['status_pengiriman'] = $this->input->post('status_pengiriman');
        
        if ($this->Pengiriman_model->update($status, $id)) {
            $this->session->set_flashdata('notif', 'Ubah Status Pengiriman Berhasil!');
        } else {
            $this->session->set_flashdata('notif', 'Ubah Status Pengiriman Gagal!');
        }

        
        redirect('admin/pengiriman');
    }

    public function pengiriman_laporan()
    {
        $data = $this->getPengiriman();
        
        $this->load->view('admin/laporan_pengiriman', $data);
    }

    ///

    public function getTransaksi()
    {
        $transaksi = $this->Transaksi_model->select();
        
        $data_transaksi = []; $namas = []; $data_produk = []; $data_jum = [];

        foreach ($transaksi as $t) {
            $exist = true;

            $id_nama['id_user'] = $t->id_user;
            $nama = $this->User_model->select_row($id_nama);
            if ($nama == null) {
                $exist = false;
            } else {
                $nama = $this->User_model->select_row($id_nama)->nama;
            }
            
            $detail = $this->Detail_model->select_where(['id_transaksi' => $t->id_transaksi]);
            if ($detail == null) { $exist = false; }

            $produks = []; $jums = [];

            foreach ($detail as $d) {
                $id_produk['id_produk'] = $d->id_produk;
                $produk = $this->Produk_model->select_row($id_produk);
                if($produk == null) { 
                    $exist = false; 
                } else {
                    $produk = $this->Produk_model->select_row($id_produk)->nama_produk;
                }
                array_push($produks, $produk);

                $jum = $d->jumlah_pembelian;
                if($jum == null) { $exist = false; }
                array_push($jums, $jum);
            }

            if ($exist == true) {
                array_push($data_transaksi, $t);
                array_push($namas, $nama);
                array_push($data_produk, $produks);
                array_push($data_jum, $jums);
            }
        }
        
        $data = [
            'transaksi' => $data_transaksi,
            'nama'      => $namas,
            'produk'    => $data_produk,
            'jumlah'    => $data_jum
        ];

        return $data;
    }

    public function getPengiriman()
    {
        $pengiriman = $this->Pengiriman_model->select();
        $data_pengiriman = []; $data_transaksi = []; $data_user = []; $data_produk = []; $data_jumlah = [];

        foreach ($pengiriman as $p) {
            $exist = true;

            $transaksi = $this->Transaksi_model->select_row(['id_transaksi' => $p->id_transaksi]);
            if ($transaksi == null) { 
                $exist = false; 
            } else {
                $user = $this->User_model->select_row(['id_user' => $transaksi->id_user]);
                if ($user == null) { $exist = false; }
            }

            $detail = $this->Detail_model->select_where(['id_transaksi' => $p->id_transaksi]);
            if ($detail == null) { $exist = false; }

            $produks = []; $jumlahs = [];

            foreach ($detail as $d) {
                $id_produk['id_produk'] = $d->id_produk;
                $produk = $this->Produk_model->select_row($id_produk);
                if($produk == null) { 
                    $exist = false; 
                } else {
                    $produk = $this->Produk_model->select_row($id_produk)->nama_produk;
                }
                array_push($produks, $produk);

                $jumlah = $d->jumlah_pembelian;
                array_push($jumlahs, $jumlah);
            }

            if ($exist == true) {
                array_push($data_pengiriman, $p);
                array_push($data_transaksi, $transaksi);
                array_push($data_user, $user);
                array_push($data_produk, $produks);
                array_push($data_jumlah, $jumlahs);
            }
        }

        $data = [
            'pengiriman'    => $data_pengiriman,
            'transaksi'     => $data_transaksi,
            'user'          => $data_user,
            'produk'        => $data_produk,
            'jumlah'        => $data_jumlah
        ];

        return $data;
    }
}

?>