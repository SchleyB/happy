<?php

class Venues extends CI_Controller{  
    
    public function __construct(){
        parent::__construct();
        $this->load->model('hh_model');
        $this->load->helper('url_helper');
        
        if (isset($_GET['when'], $_GET['where'])){
            $when = $_GET['when'];
            $where = $_GET['where'];
            
            if ($where == 'nearby'){
                redirect('/nearby/' . $when);
            }else {
                redirect('/' . $when . '/' . $where);
            }
 
        }
    }
    
    public function index(){
        $data['venues'] = $this->hh_model->get_venues();
        
        $this->load->view('templates/header', $data);
        $this->load->view('venues/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($day = NULL, $venue_area = NULL){
        $data['venue_area'] = $this->hh_model->get_venues($venue_area, $day);
        
        if (empty($data['venue_area'])){
            show_404();
        }
                
        $this->load->view('templates/header', $data);
        $this->load->view('venues/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function nearby($day = NULL){
        $data['day_of_week'] = $this->hh_model->get_venues_by_day($day);
        
        if (isset($_GET['lat'], $_GET['lng'])){
            $lat = $_GET['lat'];
            $lng = $_GET['lng'];
            $data['venues'] = $this->hh_model->get_nearest_venues($day, $lat, $lng);
            
            $this->load->view('templates/map_header', $data);
            $this->load->view('venues/map', $data);
            $this->load->view('templates/footer');
        }else {
            $this->load->view('templates/test_header', $data);
            $this->load->view('venues/get_coords', $data);
            $this->load->view('templates/footer');
        }
    
    }
    
    public function contact(){
        $this->load->view('templates/header');
        $this->load->view('templates/contact');
        $this->load->view('templates/footer');
    }
    
}
