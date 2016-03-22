<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*  * 
 * Author	: Ismo Broto
 * Description	:
 */

class Admin extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        redirect('back/admin/dashboard');
    }
            
    function login(){
        $this->load->view('_back/login/index');
    }
    
    function dashboard(){
        $this->back->display('_back/dashboard');
    }
}