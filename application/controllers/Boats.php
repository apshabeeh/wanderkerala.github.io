<?php defined('BASEPATH') or exit('No direct script access allowed');

class Boats extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('boat_model');
    }

    public function boat_search()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('source', 'Source', 'required|min_length[3]');
        $this->form_validation->set_rules('destination', 'Destination', 'required|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home');
        } else {
            $source = $this->input->post('source');
            $destination = $this->input->post('destination');

            $details = array();
            $details['source'] = $source;
            $details['destination'] = $destination;

            $src_res = $this->boat_model->src_search($source);
            $des_res = $this->boat_model->src_search($destination);

            $co_src = count($src_res);
            $co_des = count($des_res);
            $results = array();

            $index = 0;
            for ($i = 0; $i < $co_src; $i++) {
                for ($j = 0; $j < $co_des; $j++) {
                    if ($src_res[$i]['trip_id'] == $des_res[$j]['trip_id']) {

                        if ($src_res[$i]['stop_sequence'] < $des_res[$j]['stop_sequence']) {
                            $trip_id = $src_res[$i]['trip_id'];
                            // $arrival_time = date("h:i A", strtotime($des_res[$j]['time']));
                            $arrival_time = $des_res[$j]['time'];
                            $departure_time = $src_res[$i]['time'];

                            $bus_type = $this->boat_model->boat_type($trip_id);
                            $route_name = $this->boat_model->trip_search($trip_id);

                            $results[$index]['boat_type'] = $bus_type;
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
            // arsort($results);
            usort($results, function($a, $b) {
                return $a['departure_time'] <=> $b['departure_time'];
            });
            // $this->load->view('boat/resulta', $details);
            // $this->load->view('boat/resultb', ['results' => $results]);
            $this->load->view('boat_res', ['results' => $results]);

        }
    }

    public function jetty()
    {   
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('jetty', 'jetty', 'required|min_length[3]');
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('home');
        } else {

            $jetty = $this->input->post('jetty');
            $src_res = $this->boat_model->jetty_search($jetty);
            $co_stop = count($src_res);

            if (!empty($src_res)) {
                $index = 0;
                for ($i = 0; $i < $co_stop; $i++) {
                    $trip_id = $src_res[$i]['trip_id'];
                    $arrival_time = $src_res[$i]['time'];

                    $trip_name = $this->boat_model->trip_search($trip_id);
                    $bus_type = $this->boat_model->boat_type($trip_id);

                    $results[$index]['boat_type'] = $bus_type;
                    $results[$index]['jetty'] = $jetty;
                    $results[$index]['trip_name'] = $trip_name;
                    $results[$index]['arrival_time'] = date("h:i A",strtotime($arrival_time));
                    // $results[$index]['trip_id'] = $trip_id;
                    $index++;
                }
                $this->load->view('jetty_res', ['results' => $results]);
        
        }
    }

    }

    public function boat_autocomplete()
    {
        $postData = $this->input->post();

        $data = $this->boat_model->autocomplete_search($postData);

        echo json_encode($data);
    }

    public function boat_info()
    {
        $id = $this->input->post();

        $info = $this->boat_model->boat_info_search($id);

        echo json_encode($info);
    }

    public function shortest()
    {
        $source = $this->input->post('source');
        $destination = $this->input->post('destination');
    }

    public function direct($source, $destination)
    {
        $src_res = $this->boat_model->src_search($source);
        $des_res = $this->boat_model->src_search($destination);

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

                        $bus_type = $this->boat_model->boat_type($trip_id);
                        $route_name = $this->boat_model->trip_search($trip_id);

                        $results[$index]['bus_type'] = $bus_type;
                        $results[$index]['route_name'] = $route_name;
                        $results[$index]['departure_time'] = $departure_time;
                        $results[$index]['arrival_time'] = $arrival_time;
                        $results[$index]['trip_id'] = $trip_id;

                        $index++;
                    }
                }
            }
        }
        return $results;
    }

    public function indirect()
    {
        // $this->load->helper(array('form', 'url'));
        // $this->load->library('form_validation');
        // $this->form_validation->set_rules('source', 'Source', 'required|min_length[3]');
        // $this->form_validation->set_rules('destination', 'Destination', 'required|min_length[3]');
        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('home');
        // }
        // else {
            // $source = $this->input->post('source');
            $source = 'ERNAKULAM';
            // $destination = $this->input->post('destination');

            $src_res = $this->boat_model->src_search($source);
            foreach ($src_res as $key ) {
                print_r($key);
                echo '<br/>';
            }
            

            // $des_res = $this->bus_model->src_search($destination);

            // $co_src = count($src_res);
            // $co_des = count($des_res);
            // $results = array();

            // $index = 0;
            // for ($i = 0; $i < $co_src; $i++) {
            //     for ($j = 0; $j < $co_des; $j++) {
            //         if ($src_res[$i]['trip_id'] == $des_res[$j]['trip_id']) {

            //             if ($src_res[$i]['stop_sequence'] < $des_res[$j]['stop_sequence']) {
            //                 $trip_id = $src_res[$i]['trip_id'];
            //                 $arrival_time = date("h:i A", strtotime($des_res[$j]['time']));
            //                 $departure_time = date("h:i A", strtotime($src_res[$i]['time']));

            //                 $bus_type = $this->bus_model->bus_type($trip_id);
            //                 $route_name = $this->bus_model->trip_search($trip_id);
                            
            //                 $results[$index]['bus_type'] = $bus_type;
            //                 $results[$index]['route_name'] = $route_name;
            //                 $results[$index]['source'] = $source;
            //                 $results[$index]['departure_time'] = $departure_time;
            //                 $results[$index]['destination'] = $destination;
            //                 $results[$index]['arrival_time'] = $arrival_time;
            //                 $results[$index]['trip_id'] = $trip_id;
                            
            //                 $index++;
            //             }
            //         }
            //     }
            // }
        // }
    }
}
