<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Author   : Ismo Broto
     * Description  : Controller Fronted Page 
     */
    private $item_per_group = 3;


    public function __construct() {
        parent::__construct();
        
        $this->load->model(array('mdl_front'));
    }
    
    
    public function index() {
        $count          = $this->mdl_front->selectPaging()->num_rows();
        $total_group    = ceil($count/$this->item_per_group);
        
        $get            = $this->mdl_front->selectPaging()->result();
        $data   = array(
            'total_group'   => $total_group,
            'select_row'    => $get
        );
        $this->front->display('_front/home',$data);
    }
    
    function load_data(){
        if  ($_POST) {
            $group_number   = $this->input->post('group_no');
            $position       = ($group_number * $this->item_per_group);
            $select         = $this->mdl_front->selectPagingLimit($position, $this->item_per_group);
            
            foreach ($select as $row):
                echo '<div class="mdl-card post-'.$row->post.' mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__media mdl-color-text--grey-50">
                        <h3><a href="'.  base_url('page').'">'.$row->name.'</a></h3>
                    </div>
                    <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
                        '.$row->message.'
                    </div>
                    <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
                        <div class="minilogo"></div>
                        <div>
                            <strong>The Newist</strong>
                            <span>2 days ago</span>
                        </div>
                    </div>
                </div>';
            endforeach;
        }
    }
            
    function test($position=1){
        $select     = $this->mdl_front->selectPagingLimit($position, $this->item_per_group);
        
        foreach ($select as $row):
            echo '<p>'.$row->name.' ('.$row->message.')</p>';
        endforeach;
    }
    
    function grabCURL($url){
        $data = curl_init();
        // setting CURL
        curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($data, CURLOPT_URL, $url);
        // menjalankan CURL untuk membaca isi file
        $hasil = curl_exec($data);
        curl_close($data);
        return $hasil;
    }
    function explodeX( $delimiters, $string ){
        return explode( chr( 1 ), str_replace( $delimiters, chr( 1 ), $string ) );
    }
    
    function viewGrab(){
        $hasil = $this->grabCURL('http://www.kaskus.co.id/');
        $pecah = $this->explodeX(array('<section class="hot-thread">', '</section>'), $hasil);
        print_r ($pecah[1]);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */