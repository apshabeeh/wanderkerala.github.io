<?php defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('bus_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data = $formdata = array();

        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
        // $this->form_validation->set_rules('subject', 'Subject', 'required|min_length[10]|alpha_numeric_spaces');
        $this->form_validation->set_rules('message', 'Message', 'required|min_length[50]|alpha_numeric_spaces');

        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        if ($this->form_validation->run() == FALSE) {

            // $this->load->view('templates/header');
            // $this->load->view('contact/contact');
            $this->load->view('contact');
        }else {

            $mailData = array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'subject' => $subject,
                'message' => $message
            );
            $send = $this->sendEmail($mailData);
            if ($send) {
                $data['status'] = 'Your contact request has been submitted successfully';
                $this->load->view('templates/header');
                $this->load->view('contact/contact', $data);
                $this->load->view('templates/footer');
            } else {
                $data['status'] = 'Your contact request has been submitted successfully';
                $this->load->view('templates/header');
                $this->load->view('contact/contact', $data);
                $this->load->view('templates/footer');
            }
        }
    }

    private function sendEmail($mailData)
    {
        $this->load->library('email');

        $to = 'apshabeeh@gmail.com';
        $from = 'shabiaps@gmail.com';
        $fromName = 'bus';
        $mailSubject = 'Contact request submitted by ' . $mailData['name'];

        $mailContent = '
            <h2>Contact request submitted</h2>
            <p><b>Name:</b>' . $mailData['name'] . '</p>
            <p><b>Email:</b>' . $mailData['email'] . '</p>
            <p><b>Phone:</b>' . $mailData['phone'] . '</p>
            <p><b>Subject:</b>' . $mailData['subject'] . '</p>
            <p><b>Message:</b>' . $mailData['message'] . '</p>
        ';

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'dsfs@gmail.com'; // email id
        $config['smtp_pass'] = 'sd'; // email password
        $config['mailtype'] = 'html';
        $config['wordwrap'] = TRUE;
        $config['charset'] = 'iso-8859-1';
        $config['newline'] = "\r\n"; //use double quotes here
        $this->email->initialize($config);
        $this->email->to($to);
        $this->email->from($from, $fromName);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);

        return $this->email->send() ? true : false;
    }
}
