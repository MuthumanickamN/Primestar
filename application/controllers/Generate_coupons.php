<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generate_coupons extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        // Load form helper library
        $this->load->helper('form');

       if(!$this->session->userdata('id')){
            redirect('logout');
        }
    }

	
    public function index(){
		$this->load->view('includes/header3');
		//$this->load->view('templates/header');
        $this->load->view('generate_coupons');
        //$this->load->view('templates/footer');
        // Load our view to be displayed
        // to the user

       
    }
    
   
    
   
	
}

?>