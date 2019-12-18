<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basket extends CI_Controller {

    public function index()
    {
    }

    public function keranjang()
    {
        $data = $this->cart->contents();

        echo json_encode($data);
    }

    public function tambah()
    {
        $data['id_produk'] = $this->input->post('id');

        $produk = $this->Produk_model->select_where($data);

        foreach ($produk as $p) {
            $data = [
                'id'    => $this->input->post('id'),
                'name'  => $p->nama_produk,
                'qty'   => $this->input->post('qty'),
                'price' => $p->harga_produk
            ];
        }

        $this->cart->insert($data);

        echo json_encode($data);
    }

    public function edit()
    {
        $rowid = $this->input->post('rowid');
        $qty = $this->input->post('qty');

        $data = []; $no=0;

        foreach ($rowid as $r) {
            
            $data = [
                'rowid' => $r,
                'qty'   => $qty[$no]
            ]; 
            $no++;
            $this->cart->update($data);
        }

        echo json_encode($this->cart->contents());
    }

    public function bayar()
    {
        $kode = rand(1,99);

        $data = [
            'id_user'       => $this->session->id_user,
            'tanggal'       => date("Y-m-d"),
            'biaya'         => $this->cart->total(),
            'kode_unik'     => $kode,
            'total_bayar'   => $this->cart->total() + $kode,
            'status_bayar'  => false
        ];

        $id = $this->Transaksi_model->insert($data);

        $datas = [];
        $cart = $this->cart->contents();
        foreach ($cart as $c)
        {
            $data = [];
            $data = [
                'id_produk' => $c['id'],
                'jumlah_pembelian' => $c['qty'],
                'id_transaksi' => $id
            ];
            array_push($datas, $data);
        }
        $this->Detail_model->insert($datas);

        $data = $this->cart->total() + $kode;

        $this->cart->destroy();
        
        echo json_encode($data);
    }

}

/* End of file Basket.php */

?>