<?php

class Theme extends CI_CONTROLLER {
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        //echo 'index from theme controller';
        $this->load->view('theme/index');
    }
    
    
    
    
    
}