<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('html-header');        
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('home');
        $this->load->view('html-footer');
    }		
}