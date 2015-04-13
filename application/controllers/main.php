<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once __DIR__.'/my_controller.php';

class Main extends My_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
    	
    	$message1 = $this->load->view('info_message', array(
    		'message' => "Hello World!"
    		), TRUE);

        $message2 = $this->load->view('success_message', array(
            'message' => "Hello World!"
            ), TRUE);

        $message3 = $this->load->view('warning_message', array(
            'message' => "Hello World!"
            ), TRUE);

        $message4 = $this->load->view('error_message', array(
            'message' => "Hello World!"
            ), TRUE);
        
        $this->template($message1.$message2.$message3.$message4);
    }
}