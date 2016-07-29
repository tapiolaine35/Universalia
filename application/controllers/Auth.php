<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auth
 *
 * @author Ionut
 */
class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog/queries');
        //$this->load->helper('url');
    }
    
    public function index()
    {
        $this->load->view('head');
        $this->load->view('register');
    }
    
    public function login()
    {
        $this->load->view('head');
        $this->load->view('login');
    }
    
    public function logout()
    {
        $this->load->view('head');
        $this->load->view('logout');
    }
}
