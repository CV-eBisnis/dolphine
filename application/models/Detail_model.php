<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_model extends CI_Model {

    public function insert($data)
    {
        $this->db->insert_batch('detail_transaksi',$data);
    }

}

/* End of file Detail_model.php */

?>