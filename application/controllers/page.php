<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*  * 
 * Author	: Ismo Broto
 * Description	: 
 */

class Page extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->front->display('_front/page');
    }
}