<?php

class Hair_transplant_payment_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function checkout($sav)
    {
        $query=$this->db->insert('payments',$sav);
        return $query;
    }
}
?>