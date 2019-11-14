<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    public function insert($param)
    {
        return $this->db->insert('produk', $param);
    }

    public function select()
    {
        return $this->db->get('produk')->result();
    }

    public function select_where($param)
    {
        return $this->db->get_where('produk', $param)->result();
    }

    public function update($param, $id)
    {
        return $this->db->update('produk', $param, $id);
    }

    public function delete($id)
    {
        return $this->db->delete('produk', $id);
    }
}

/* End of file Produk_model.php */

?>