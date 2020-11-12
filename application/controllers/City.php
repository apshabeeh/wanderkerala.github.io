<?php defined('BASEPATH') or exit('No direct script access allowed');

class City extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('bus_model');
    }

    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('source', 'Source', 'required|min_length[3]');
        $this->form_validation->set_rules('destination', 'Destination', 'required|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('city/city_search');
            $this->load->view('templates/footer');
        } else {
            $city = $this->input->post('city');
            $source = $this->input->post('source');
            $destination = $this->input->post('destination');
            if ($city == 'Trivandrum') {
                print_r($city);
            }

            // $src_res = $this->bus_model->src_search($source);
            // $des_res = $this->bus_model->src_search($destination);
            // if ($city == 'Trivandrum') {
                
            // }
            $this->load->view('templates/header');
            $this->load->view('city/city_search');
            $this->load->view('templates/footer');
        }
    }

}