<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    /**
     * Loads the html template (header, menu, body and footer).
     * @param unknown $cuerpo
     */
    protected function template($body)
    {
        $data['header'] = $this->load->view('header', 0, TRUE);
        $data['body'] = $body; 
        $data['footer'] = $this->load->view('footer', 0, TRUE);
        
        //Create a template with the defined parts
        $this->load->view('template', $data);
    }
    
}