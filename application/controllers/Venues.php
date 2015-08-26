<?php

class Venues extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('hh_model');
        $this->load->helper('url_helper');
    }
    
    public function index(){
        $data['venues'] = $this->hh_model->get_venues();
        
        $this->load->view('templates/header', $data);
        $this->load->view('venues/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($venue_area = NULL, $day = NULL){
        $data['venue_area'] = $this->hh_model->get_venues($venue_area, $day);
        
        if (empty($data['venue_area'])){
            show_404();
        }
                
        $this->load->view('templates/header', $data);
        $this->load->view('venues/view', $data);
        $this->load->view('templates/footer');
    }
    
}