<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basket extends CI_Controller {

    public function index()
    {
        
    }

    public function keranjang()
    {
        # code...
    }

    public function keranjang_tambah()
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

}

/* End of file Basket.php */

?>