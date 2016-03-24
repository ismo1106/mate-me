<?php 

/* 
 * Author       : Ismo Broto
 * Description  : Template for Back Page
 */

class Back {
    protected $_CI;
    
    function __construct() {
        $this->_CI=&get_instance();
    }
    
    function display($view, $data = NULL){
        $this->_CI->load->model('Mdl_Utility');
        $data['_getMenu1']  = $this->_CI->Mdl_Utility->getSidebarByLevel(1)->result();
        $data['_getMenu2']  = $this->_CI->Mdl_Utility->getSidebarByLevel(2)->result();
        
        $data['_style']     = $this->_CI->load->view('_theme/back/style',$data,true);
        $data['_header']    = $this->_CI->load->view('_theme/back/header',$data,true);
        $data['_left']      = $this->_CI->load->view('_theme/back/leftside',$data,true);
        $data['_right']     = $this->_CI->load->view('_theme/back/rightside',$data,true);
        $data['_content']   = $this->_CI->load->view($view,$data,true);
        $data['_footer']    = $this->_CI->load->view('_theme/back/footer',$data,true);
        $data['_script']    = $this->_CI->load->view('_theme/back/script',$data,true);
        $this->_CI->load->view('/_theme/back.php',$data);
    }
}