<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Amigos extends CI_Controller
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
        $this->load->view('amigos');
        $this->load->view('html-footer');
    }		
}