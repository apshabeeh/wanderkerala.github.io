<?php

class Stop_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function stop_search($stop)
    {
        $this->db->select('stop_id');
        $this->db->where('stop_name',$stop);
        $query = $this->db->get('boat_stops');
        $result = $query->row_array();
        $source_id = $result['stop_id'];
        
        $this->db->select('trip_id, time');
        $this->db->where('stop_id',$source_id);
        $query = $this->db->get('boat_stop_times');
        $stop_data = $query->result_array();
        return $stop_data;
    }

    public function autocomplete_search($postData)
    {  
        $response = array();
        
        if (isset($postData['search'])) {
            $this->db->select('stop_name, stop_id');
            $this->db->where("stop_name like '%".$postData['search']."%' ");
            $records = $this->db->get('stops')->result();

            foreach ($records as $row ) {
                $response[] = array( "value"=>$row->stop_id,"label"=>$row->stop_name);
            }
        }
        return $response;
    }

    public function stop_name($stop)
    {
        $this->db->select('stop_name');
        $this->db->where('stop_id',$stop);
        $query = $this->db->get('stops');
        $result = $query->row_array();
        // print_r($result);
        return $result;
    }
}