<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function insert($param)
    {
        return $this->db->insert('User', $param);
    }

    public function select(Type $var = null)
    {
        # code...
    }

    public function select_where($param)
    {
        return $this->db->get_where('User', $param)->result();
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

/* End of file User_model.php */

?>