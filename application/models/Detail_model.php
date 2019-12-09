<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_model extends CI_Model {

    public function insert($data)
    {
        $this->db->insert_batch('detail', $data);
    }

    public function select_where($param)
    {
        return $this->db->get_where('detail', $param)->result();
    }

    public function delete($param)
    {
        return $this->db->delete('detail', $param);
    }

}

/* End of file Detail_model.php */

?>