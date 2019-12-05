<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    public function insert($param)
    {
        $this->db->insert('transaksi', $param);
        return $this->db->insert_id();
    }

    public function select()
    {
        return $this->db->get('transaksi')->result();
    }

    public function select_where(Type $var = null)
    {
        # code...
    }

    public function update(Type $var = null)
    {
        # code...
    }

    public function delete(Type $var = null)
    {
        # code...
    }    
}

/* End of file Transaksi_model.php */


?>