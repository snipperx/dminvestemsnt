<?php

/**
 *
 * @author Nkosana Ncube <ncubesss@gmail.com>
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Builder extends CI_Controller
{

    public function index()
    {
        $this->load->view('WeBuild/index');
    }

    public function service()
    {
        $this->load->view('WeBuild/service');
    }

    public function projects()
    {
        $this->load->view('WeBuild/projects');
    }

    public function about_us()
    {
        $this->load->view('WeBuild/about_us');
    }

}
