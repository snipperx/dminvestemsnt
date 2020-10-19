<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Controller
{


    public function __construct()
    {
        parent:: __construct();

        $this->load->helper('url');
        // load form_validation library
        $this->load->library('form_validation');

    }

    function send()
    {
        $this->load->config('email');
        $this->load->library('email');


        $con_name = $this->input->post('name');
        $con_email = $this->input->post('email');
        $con_phome = $this->input->post('phone');
        $con_city = $this->input->post('city');

        $fromName = $con_email;
        $to = 'dedan@domain.com';


        $data['data'] = array('phone' => $con_phome, 'email' => $con_email, 'name' => $con_name, 'city' => $con_city, 'support' => $fromName);

        $message = $this->load->view('Email/quote', $data, TRUE);

        $this->email->set_newline("\r\n");
        $this->email->from($fromName);
        $this->email->to($to);
        $this->email->subject('contact us');
        $this->email->message($message);


        try {
            ($this->email->send());
            echo json_encode(['success' => true]);

        } catch (Exception $e) {
            echo response()->json(['success' => false, 'message' => $e]);
        }
    }


    function comment()
    {
        $this->load->config('email');
        $this->load->library('email');


        $con_name = $this->input->post('name');
        $con_email = $this->input->post('email');
        $con_message = $this->input->post('message');

        $fromName =   $con_email ;
        $to = 'dedan@domain.com';
        $support = 'dedan@domain.com';


        $data['data'] = array('message' => $con_message, 'email' => $con_email, 'name' => $con_name, 'support' => $support);

        $message = $this->load->view('Email/comment', $data, TRUE);

        $this->email->set_newline("\r\n");
        $this->email->from($fromName);
        $this->email->to($to);
        $this->email->subject('contact us');
        $this->email->message($message);


        try {
            ($this->email->send());
            echo json_encode(['success' => true]);

        } catch (Exception $e) {
            echo response()->json(['success' => false, 'message' => $e]);
        }
    }

}
