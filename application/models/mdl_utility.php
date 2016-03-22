<?php

/*  * 
 * Author	: Ismo Broto
 * Description	:
 */

class Mdl_Utility extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    private $Table  = array(
        'Sidebar'   =>  'tbl_utl_sidebar'
    );
            
    function insertSidebar($data){
        $this->db->insert($this->Table['Sidebar'], $data);
    }
    function selectSidebar(){
        $select = $this->db->get($this->Table['Sidebar']);
        return $select;
    }
}