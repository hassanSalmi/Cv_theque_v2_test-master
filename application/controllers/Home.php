<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: itnv1313
 * Date: 13/04/2016
 * Time: 11:14
 */
class Home extends CI_Controller {

    public function index(){
        $this->load->view('Home');
    }
}