<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller {

    function web_template($data){
        $this->load->view('web_template', $data);
    }
    
    function admin($data){
        
        $this->load->view('admin', $data);
    }
    
    function pie(){
        $this->load->view('pie');
    }
   
}
