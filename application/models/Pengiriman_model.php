<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengiriman_model extends CI_Model {

    public function insert($param)
    {
        return $this->db->insert('pengiriman', $param);
    }

    public function select()
    {
        return $this->db->get('pengiriman')->result();
    }

    public function select_where($param)
    {
        return $this->db->get_where('pengiriman', $param)->result();
    }

    public function update($param, $id)
    {
        return $this->db->update('pengiriman', $param, $id);
    }

}

/* End of file Pengiriman_model.php */


?>