<?php defined('BASEPATH') or exit('No direct script access allowed');

class Bus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('bus_model');
        $this->load->model('boat_model');
    }

    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('source', 'Source', 'required|min_length[3]');
        $this->form_validation->set_rules('destination', 'Destination', 'required|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
            // $this->load->view('templates/header');
            // $this->load->view('main/search');
            // $this->load->view('templates/footer');
            $this->load->view('home');
        } else {
            $source = $this->input->post('source');
            $destination = $this->input->post('destination');
            
            $details = array();
            $details['source'] = $source;
            $details['destination'] = $destination;
            
            $src_res = $this->bus_model->src_search($source);
            $des_res = $this->bus_model->src_search($destination);

            $co_src = count($src_res);
            $co_des = count($des_res);
            $results = array();

            $index = 0;
            for ($i = 0; $i < $co_src; $i++) {
                for ($j = 0; $j < $co_des; $j++) {
                    if ($src_res[$i]['trip_id'] == $des_res[$j]['trip_id']) {

                        if ($src_res[$i]['stop_sequence'] < $des_res[$j]['stop_sequence']) {
                            $trip_id = $src_res[$i]['trip_id'];
                            $arrival_time = date("h:i A", strtotime($des_res[$j]['time']));
                            $departure_time = date("h:i A", strtotime($src_res[$i]['time']));

                            $bus_type = $this->bus_model->bus_type($trip_id);
                            $route_name = $this->bus_model->trip_search($trip_id);
                            
                            $results[$index]['bus_type'] = $bus_type;
                            $results[$index]['route_name'] = $route_name;
                            $results[$index]['source'] = $source;
                            $results[$index]['departure_time'] = $departure_time;
                            $results[$index]['destination'] = $destination;
                            $results[$index]['arrival_time'] = $arrival_time;
                            $results[$index]['trip_id'] = $trip_id;
                            
                            $index++;
                        }
                    }
                }
            }
            // $this->load->view('templates/header');
            // $this->load->view('main/results', ['results' => $results]);
            // $this->load->view('resulta', $details);
            $this->load->view('result', ['results' => $results]);
            // $this->load->view('templates/footer');
        }
        // $this->load->view('home');
        // $this->load->view('search');
        // $this->load->view('footer');
    }

    public function bus_info()
    {
        $id = $this->input->post();

        $info = $this->bus_model->bus_info_search($id);

        echo json_encode($info);
    }

    public function autocomplete()
    {
        $postData = $this->input->post();

        $data = $this->bus_model->autocomplete_search($postData);

        echo json_encode($data);
    }

    public function boat_autocomplete()
    {
        $postData = $this->input->post();

        $data = $this->boat_model->autocomplete_search($postData);

        echo json_encode($data);
    }

    public function stop_search()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('stop', 'Stop', 'required|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home');
        } else {
            $stop = $this->input->post('stop');
            $stop_name = array(
                'stop_name' => $stop
            );
            $stop_res = $this->bus_model->stop_search($stop);
            $co_stop = count($stop_res);

            if (!empty($stop_res)) {
                $index = 0;
                for ($i = 0; $i < $co_stop; $i++) {
                    $trip_id = $stop_res[$i]['trip_id'];
                    $arrival_time = $stop_res[$i]['time'];

                    $trip_name = $this->bus_model->trip_search($trip_id);
                    $bus_type = $this->bus_model->bus_type($trip_id);

                    $results[$index]['bus_type'] = $bus_type;
                    $results[$index]['trip_name'] = $trip_name;
                    $results[$index]['stop'] = $stop;
                    $results[$index]['arrival_time'] = date("h:i A",strtotime($arrival_time));
                    $results[$index]['trip_id'] = $trip_id;
                    $index++;
                }
                // $this->load->view('stop/resa', $stop_name);
                $this->load->view('stop_res', ['results' => $results]);
            } 
            else {
                $this->load->view('home');
            }
        }
    }
}
    
    // public function stopcomplete()
    // {
    //     $postData = $this->input->post();
    //     print_r($postData);
    // }

    //     public function data_search()
    //     {
    //         $this->load->helper(array('form', 'url'));
    //         $this->load->library('form_validation');
    //         $this->form_validation->set_rules('source', 'required', 'integer');
    //         $this->form_validation->set_rules('destination', 'required', 'integer');
    //         if ($this->form_validation->run() == FALSE) {
    //             // $this->load->view('header');
    //             $this->load->view('search');
    //             // $this->load->view('footer');
    //         }
    //         else {

    //         $source = $this->input->post('source');
    //         $destination = $this->input->post('destination');

    //         $src_res = $this->bus_model->src_search($source);
    //         $des_res = $this->bus_model->des_search($destination);

    //         $co_src = count($src_res);
    //         $co_des = count($des_res);
    //         $results = array();

    //         $index =0;
    //         for ($i=0; $i < $co_src; $i++) { 
    //             for ($j=0; $j < $co_des; $j++) { 
    //                 if ($src_res[$i]['trip_id'] == $des_res[$j]['trip_id']) {

    //                     if ($src_res[$i]['stop_sequence'] < $des_res[$j]['stop_sequence']) {
    //                         $trip_id = $src_res[$i]['trip_id'];
    //                         $arrival_time = $des_res[$j]['arrival_time'];
    //                         $departure_time = $src_res[$i]['arrival_time'];

    //                         $route_name = $this->bus_model->trip_search($trip_id);

    //                         $results[$index]['route_name'] = $route_name;
    //                         $results[$index]['departure_time'] = $departure_time;
    //                         $results[$index]['arrival_time'] = $arrival_time;
    //                         $index++;
    //                     }
    //                 }
    //             }

    //         }
    //         $this->load->view('header');
    //         $this->load->view('results', ['results' =>$results]);
    //         $this->load->view('footer');
    //         }
    //     }

