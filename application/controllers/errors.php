<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*  * 
 * Author	: Ismo Broto
 * Description	:
 */

class Errors extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function error404(){
        $this->front->display('_error/error_404');
    }
}