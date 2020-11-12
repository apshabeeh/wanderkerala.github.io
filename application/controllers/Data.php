<?php

class Data extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
        $this->load->library('session');
    }

    public function add_data()
    {
        $this->load->view('add_bus');
    }

    public function add_agency()
    {
        $agency_id = $this->input->post('agency_id');
        $agency_name = $this->input->post('agency_name');
        $agency_phone = $this->input->post('agency_phone');
        $agency_lang = $this->input->post('agency_lang');
        $data = array(
            'agency_id' => $agency_id,
            'agency_name' => $agency_name,
            'agency_phone' => $agency_phone,
            'agency_lang' => $agency_lang
        );
        $this->data_model->agency($data);

        $this->session->set_flashdata('msg', 'Agency added successfully');
        redirect('data/add_data');
    }

    public function add_routes()
    {
        $route_id = $this->input->post('route_id');
        $agency_id = $this->input->post('agency_id');
        $route_name = $this->input->post('route_name');
        $route_des = $this->input->post('route_desc');
        $data = array(
            'route_id' => $route_id,
            'agency_id' => $agency_id,
            'route_name' => $route_name,
            'route_desc' => $route_des
        );
        $this->data_model->routes($data);

        $this->session->set_flashdata('msg', 'Route added successfully');
        redirect('data/add_data');
    }

    public function add_trips()
    {
        $trip_id = $this->input->post('trip_id');
        $trip_name = $this->input->post('trip_name');
        $route_id = $this->input->post('route_id');
        $data = array(
            'trip_id' => $trip_id,
            'trip_name' => $trip_name,
            'route_id' => $route_id
        );
        $this->data_model->trips($data);

        $this->session->set_flashdata('msg', 'Trip added successfully');
        redirect('data/add_data');
    }

    public function add_stops()
    {
        $stop_id = $this->input->post('stop_id');
        $stop_name = $this->input->post('stop_name');
        $stop_lat = $this->input->post('stop_lat');
        $stop_long = $this->input->post('stop_long');
        $location_type = $this->input->post('location_type');
        $stop_desc = $this->input->post('stop_desc');
        $zone_id = $this->input->post('zone_id');

        $data = array(
            'stop_id' => $stop_id,
            'stop_name' => $stop_name,
            'stop_lat' => $stop_lat,
            'stop_long' => $stop_long,
            'location_type' => $location_type,
            'stop_desc' => $stop_desc,
            'zone_id' => $zone_id
        );
        $this->data_model->stops($data);

        $this->session->set_flashdata('msg', 'Stop added successfully');
        redirect('data/add_data');
    }

    public function add_stop_times()
    {
        $trip_id = $this->input->post('trip_id');
        $stop_id = $this->input->post('stop_id');
        $stop_sequence = $this->input->post('stop_sequence');
        $arrival_time = $this->input->post('arrival_time');

        $data = array(
            'trip_id' => $trip_id,
            'stop_id' => $stop_id,
            'stop_sequence' => $stop_sequence,
            'arrival_time' => $arrival_time
        );
        $this->data_model->stop_times($data);

        $this->session->set_flashdata('msg', 'Stop time added successfully');
        redirect('data/add_data');
    }
}
