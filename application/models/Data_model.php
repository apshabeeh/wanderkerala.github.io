<?php
class Data_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function agency($data)
    {
        
        $this->db->insert('agency', $data);
    }

    public function routes($data)
    {
        $this->db->insert('routes', $data);
    }

    public function trips($data)
    {
        $this->db->insert('trips', $data);
    }

    public function stops($data)
    {
        $this->db->insert('stops', $data);
    }

    public function stop_times($data)
    {
        $this->db->insert('stop_times', $data);
    }
}
