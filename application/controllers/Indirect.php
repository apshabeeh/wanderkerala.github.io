<?php

class Indirect extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('indirect_model');
    }

    public function index()
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
        $source = 'KOLLAM';
        // $destination = $this->input->post('destination');
        $destination = 'VALLAKADAVU';

        $visited = array();
        $index = 0;

        $des_id = $this->indirect_model->des_id($destination);
        // print_r($des_id);

        $src_res = $this->indirect_model->src_search($source);
        $co_src = count($src_res);
        // print_r($src_res);
        echo '<br/>';
        for ($i=0; $i < $co_src ; $i++) { 
            $trip_id = $src_res[$i]['trip_id'];
            $visited [$index]['trip_id'] = $src_res[$i]['trip_id'];
            // print_r($trip_id);
            // echo '<br/>';
            $stop_seq = $this->indirect_model->full_trip($trip_id);
            // print_r($stop_seq);
            // echo '<br/>';
            $co_stop_seq = count($stop_seq);
            // print_r($co_stop_seq);
            for ($j=1; $j < $co_stop_seq ; $j++) { 
                if ($stop_seq[$j]['stop_id'] != $des_id) {
                    // print_r($stop_seq[$j]['trip_id']);
                    $a = $this->repeat($stop_seq[$j]['stop_id'], $des_id);
                    print_r($a);
                    echo '<br/>';
                }
            }
        
        }

        // $des_res = $this->indirect_model->des_search($destination);
        // $co_des = count($des_res);
        // echo '<br/>';
        // foreach ($des_res as $key) {
        //     print_r($key);
        //     echo '<br/>';
        // }
    }

    public function repeat($stop_id, $des_id)
    {
        
            // print_r($trip_id);
            // echo '<br/>';
            $stop_seq = $this->indirect_model->secondary($stop_id);
            $co_stop_seq = count($stop_seq);
            // $stop_seq = $this->indirect_model->full_trip($trip_id);
            foreach ($stop_seq as $key) {
                if ($key['stop_id'] != $des_id) 
                {
                    // return $key['trip_id'];
                }
                    // print_r($key['trip_id']);
                    // echo '<br/>';
                    // return $key['trip_id'];
                }
            for ($k=0; $k < $co_stop_seq; $k++) { 
                $trip_id = $stop_seq[$k]['trip_id'];
                $a[$k]['$trip_id'] = $stop_seq[$k]['trip_id'];
                // print_r($trip_id);
                

                    //     if ($stop_seq[$k]['stop_id'] != $des_id) {
                    //         break;
                    //     }
            }
            return $a;
            
            // print_r($stop_seq);
            // echo '<br/>';
            // echo '<br/>';

            // $co_stop_seq = count($stop_seq);
            // for ($k=1; $k < $co_stop_seq; $k++) { 
            //     if ($stop_seq[$k]['stop_id'] != $des_id) {
            //         break;
            //     }   
            // }
            // print_r($co_stop_seq);
            // for ($j=1; $j <= $co_stop_seq ; $j++) { 
            //     if ($stop_seq[$j]['stop_id'] != $des_id) {
                    
            //     }
            // }
        
    }
}
