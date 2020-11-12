<?php defined('BASEPATH') or exit('No direct script access allowed');

class Boat_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function autocomplete_search($postData)
    {  
        $response = array();
        
        if (isset($postData['search'])) {
            $this->db->select('stop_name');
            $this->db->where("stop_name like '".$postData['search']."%' ");
            $this->db->order_by('stop_name', 'ASC');
            $records = $this->db->get('boat_stops')->result();

            foreach ($records as $row ) {
                $response[] = array( "value"=>$row->stop_name);
            }
        }
        return $response;
    }

    public function src_search($data)
    {
        $this->db->select('stop_id');
        $this->db->where('stop_name',$data);
        $query = $this->db->get('boat_stops');
        $result = $query->row_array();
        $source_id = $result['stop_id'];

        $this->db->select('trip_id,stop_sequence,time');
        $this->db->where('stop_id',$source_id);
        $query = $this->db->get('boat_stop_times');
        $src_data = $query->result_array();
        return $src_data;
    }

    public function jetty_search($jetty)
    {
        $this->db->select('stop_id');
        $this->db->where('stop_name',$jetty);
        $query = $this->db->get('boat_stops');
        $result = $query->row_array();
        $source_id = $result['stop_id'];
        
        $this->db->select('trip_id, time');
        $this->db->where('stop_id',$source_id);
        $this->db->order_by('time', 'ASC');
        $query = $this->db->get('boat_stop_times');
        $stop_data = $query->result_array();
        return $stop_data;
    }

    public function trip_search($trip_id) 
    {
        $this->db->select('trip_name');
        $this->db->where('trip_id',$trip_id);
        $query = $this->db->get('boat_trips');
        $result = $query->row_array();
        $route_id = $result['trip_name'];
        return $route_id;
    }

    public function boat_type($trip_id)
    {
        $this->db->select('route_id');
        $this->db->where('trip_id',$trip_id);
        $query = $this->db->get('boat_trips');
        $routeres= $query->row_array();
        $routeid = $routeres['route_id'];

        $this->db->select('route_desc');
        $this->db->where('route_id', $routeid);
        $query = $this->db->get('boat_routes');
        $route_result = $query->row_array();
        $route_desc = $route_result['route_desc'];
        return $route_desc;
    }

    public function boat_info_search($trip_id)
    {
        $response = array();
        
        if (isset($trip_id['userid'])) {
            $this->db->select('st.time, sn.stop_name');
            $this->db->from('boat_stop_times as st');
            $this->db->join('boat_stops as sn', 'sn.stop_id = st.stop_id');
            $this->db->where('trip_id',$trip_id['userid']);
            $this->db->order_by('st.time', 'ASC');
            $records = $this->db->get()->result();

            foreach ($records as $row ) {
                $response[] = array( "stop_name"=>$row->stop_name, "time"=>date("h:i A", strtotime($row->time)));
            }
        }
        return $response;
    }
}
