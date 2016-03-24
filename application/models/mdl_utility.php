<?php

/*  * 
 * Author	: Ismo Broto
 * Description	:
 */

class Mdl_Utility extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    private $By     = array(
        'PrimarySidebar'    => 'id_menu',
        'LevelSidebar'      => 'level_menu',
        'SerialNumber'      => 'serial_number'
    );
    private $Table  = array(
        'Sidebar'   =>  'tbl_utl_sidebar'
    );
            
    function insertSidebar($data){
        $this->db->insert($this->Table['Sidebar'], $data);
    }
    function selectSidebar(){
        $this->db->order_by($this->By['SerialNumber'], 'ASC');
        $this->db->where($this->By['LevelSidebar'], 1);
        $select = $this->db->get($this->Table['Sidebar']);
        return $select;
    }
    function getSidebarByLevel($level){
        $this->db->order_by($this->By['SerialNumber'], 'ASC');
        $this->db->where($this->By['LevelSidebar'], $level);
        $select = $this->db->get($this->Table['Sidebar']);
        return $select;
    }
}