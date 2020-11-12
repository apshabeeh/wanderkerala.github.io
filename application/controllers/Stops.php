<?php defined('BASEPATH') or exit('No direct script access allowed');

class Stops extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('stop_model');
        $this->load->model('bus_model');
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
            $stop_res = $this->stop_model->stop_search($stop);
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
                $this->load->view('stop/resa', $stop_name);
                $this->load->view('stop/resb', ['results' => $results]);
            } 
            else {
                $this->load->view('home');
            }
        }
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
}
