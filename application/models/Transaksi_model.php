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

    public function select_row($param)
    {
        return $this->db->get_where('transaksi', $param)->row();
    }

    public function select_where($param)
    {
        return $this->db->get_where('transaksi', $param)->result();
    }

    public function update($param, $id)
    {
        return $this->db->update('transaksi', $param, $id);
    }

    public function delete($param)
    {
        return $this->db->delete('transaksi', $param);
    }    
}

/* End of file Transaksi_model.php */


?>