<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mdl_Front extends CI_Model{
    
    private $table  = array(
        'tblPaging' => 'paginate'
    );


    public function __construct() {
        parent::__construct();
    }
    
    function selectPaging(){
        $query  = $this->db->get($this->table['tblPaging']);
        return $query;
    }
    
    function selectPagingLimit($start,$end){
        $query  = $this->db->query("SELECT * FROM paginate ORDER BY id ASC LIMIT $start, $end");
        return $query->result();
    }
}