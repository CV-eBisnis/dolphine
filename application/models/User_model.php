<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function insert($param)
    {
        return $this->db->insert('user', $param);
    }

    public function select()
    {
        return $this->db->get('user')->result();
    }

    public function select_where($param)
    {
        return $this->db->get_where('user', $param)->result();
    }

    public function select_row($param)
    {
        return $this->db->get_where('user', $param)->row();
    }

    public function update($param, $id)
    {
        return $this->db->update('user', $param, $id);
    }

    public function delete($param)
    {
        return $this->db->delete('user', $param);
    }
}

/* End of file User_model.php */

?>