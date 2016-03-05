<?php 

/* 
 * Author       : Ismo Broto
 * Description  : Template for Front Page
 */

class Front {
    protected $_CI;
    
    function __construct() {
        $this->_CI=&get_instance();
    }
    
    function display($view, $data = NULL){
        $data['_header']    = $this->_CI->load->view('_theme/front/header',$data,true);
        $data['_content']   = $this->_CI->load->view($view,$data,true);
        $data['_footer']    = $this->_CI->load->view('_theme/front/footer',$data,true);
        $data['_footjs']    = $this->_CI->load->view('_theme/front/footjs',$data,true);
        $this->_CI->load->view('/_theme/front.php',$data);
    }
}