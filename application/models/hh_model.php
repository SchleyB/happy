<?php

class hh_model extends CI_Model{
    
    public function __construct(){
            $this->load->database();
    }
    
    public function get_venues($venue_area = FALSE, $day = FALSE){
        if ($venue_area === FALSE){
                $query = $this->db->get('venues');
                return $query->result_array();
        }
        
        $venue_array = array('venue_area' => $venue_area, 'day_of_week' => $day);
        
        $query = $this->db->get_where('venues', $venue_array);
        return $query->result_array();
            
    }
    
}
