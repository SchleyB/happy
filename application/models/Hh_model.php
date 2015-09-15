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
    
    public function get_venues_by_day($day = FALSE){
        if ($day === FALSE){
            $query = $this->db->get('venues');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('venues', array('day_of_week' => $day));
        return $query->result_array();
    }
    
    public function get_nearest_venues($day = FALSE, $lat = FALSE, $lng = FALSE){
        if ($day === FALSE){
            $query = $this->db->get('venues');
            return $query->result_array();
        }
                
        $query = $this->db->query("SELECT id, venue_name, venue_deal, address, venue_lat, venue_lng,( 3959 * acos( cos(
        radians('$lat') ) * cos( radians( venue_lat ) ) * cos( radians(
        venue_lng ) - radians('$lng') ) + sin( radians('$lat') ) * sin( radians(
        venue_lat ) ) ) ) AS distance FROM venues WHERE day_of_week='$day' HAVING distance < 25 ORDER BY distance LIMIT 0 , 20;");
        return $query->result_array();
    }
    
}
