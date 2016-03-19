<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Author by ITD15
 */

class EmailControl extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        $this->load->library('email');
    }
    
    function index(){
        echo 'sasasa';
    }
            
    function send(){
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "mx1.idhostinger.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "contact@ismo-pages.xyz";
        $config['smtp_pass'] = "11eleven";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        
        $ci->email->initialize($config);
 
        $ci->email->from('contact@ismo-pages.xyz', 'Ismo');
        $list = array('ismo.lhavic@gmail.com');
        $ci->email->to($list);
        $ci->email->subject('judul email');
        $ci->email->message('isi email');
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
}