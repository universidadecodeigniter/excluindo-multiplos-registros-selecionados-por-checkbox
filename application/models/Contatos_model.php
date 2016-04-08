<?php

class Contatos_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function GetContatos() {
        $query = $this->db->get('contatos');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function Delete($ids){
      if($this->db->where_in('id',$ids)->delete('contatos'))
        return true;
      else
        return false;
    }
}
