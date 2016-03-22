<?php

/*  * 
 * Author	: Ismo Broto
 * Description	:
 */

class Utility extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('mdi');
        $this->load->model(array('Mdl_Utility'));
    }
    
    // #################### ==== Start Ulitity/Side Bar ==== #################### //
    function MenuBack(){
        $data   = array(
            '_mdiList'  => mdi_list(),
            '_getMenu'  => $this->Mdl_Utility->selectSidebar()->result()
        );
        $this->back->display('_back/utility/sidebar/index',$data);
    }
    function insertMenuBack(){
        if($this->input->post('txtLink') == NULL || $this->input->post('txtLink') == '' || $this->input->post('selHeader') == 0){
            $link   = '#';
        }else{
            $link   = $this->input->post('txtLink');
        }
        $data   = array(
            'label_menu'    => $this->input->post('txtLabel'),
            'icon_menu'     => $this->input->post('selIcon'),
            'link_menu'     => $link,
            'level_menu'    => $this->getLevel($this->input->post('selHeader')),
            'header_menu'   => $this->input->post('selHeader'),
            'created_by'    => 'ismo_',
            'created_date'  => date('Y-m-d H:i:s')
        );
        $this->Mdl_Utility->insertSidebar($data);
        redirect('back/Utility/MenuBack');
    }
    // #################### ==== End Ulitity/Side Bar ==== #################### //
    function getLevel($header){
        if($header == 0){
            return 1;
        }else{
            $this->db->where('id_menu', $header);
            $get = $this->db->get('tbl_utl_sidebar');
            $row = $get->row();

            return (int)$row->level_menu + 1;
        }
    }
            
    function test(){
        $this->load->helper('mdi');
        
        $asa    = mdi_list();
        
        foreach ($asa as $list):
            echo $list.'<br/>';
        endforeach;
    }
}