<?php defined('BASEPATH') or exit('No direct script access allowed');

class Indirect_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function des_id($data)
    {
        $this->db->select('stop_id');
        $this->db->where('stop_name',$data);
        $query = $this->db->get('boat_stops');
        $result = $query->row_array();
        $source_id = $result['stop_id'];
        return $source_id;
    }

    public function src_search($data)
    {
        $this->db->select('stop_id');
        $this->db->where('stop_name',$data);
        $query = $this->db->get('boat_stops');
        $result = $query->row_array();
        $source_id = $result['stop_id'];

        $this->db->select('trip_id,stop_id,stop_sequence,time');
        $this->db->where('stop_id',$source_id);
        $this->db->where('stop_sequence','1');
        $query = $this->db->get('boat_stop_times');
        $src_data = $query->result_array();
        return $src_data;
    }

    public function des_search($data)
    {
        $this->db->select('stop_id');
        $this->db->where('stop_name',$data);
        $query = $this->db->get('boat_stops');
        $result = $query->row_array();
        $source_id = $result['stop_id'];

        $this->db->select('trip_id,stop_id,stop_sequence,time');
        $this->db->where('stop_id',$source_id);
        $query = $this->db->get('boat_stop_times');
        $src_data = $query->result_array();
        return $src_data;
    }

    public function full_trip($trip_id)
    {
        $this->db->select('trip_id,stop_id,stop_sequence');
        $this->db->where('trip_id',$trip_id);
        $query = $this->db->get('boat_stop_times');
        $src_data = $query->result_array();
        return $src_data;
    }

    public function secondary($stop_id)
    {
        $this->db->select('trip_id,stop_id,stop_sequence,time');
        $this->db->where('stop_id',$stop_id);
        $this->db->where('stop_sequence','1');
        $query = $this->db->get('boat_stop_times');
        $sec_data = $query->result_array();
        return $sec_data;
    }
}