<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
     
        $data['title'] = "Beranda";
        $this->load->view('template/head');
        $this->load->view('users/index', $data);
        $this->load->view('template/footer');

    }

    public function contact()
    {
     
        $data['title'] = "Contact";
        $this->load->view('template/head',$data);
        $this->load->view('users/contact', $data);
        $this->load->view('template/footer',$data);

    }

    public function aboutus()
    {
     
        $data['title'] = "AboutUS";
        $this->load->view('template/head',$data);
        $this->load->view('users/about', $data);
        $this->load->view('template/footer');

    }


}