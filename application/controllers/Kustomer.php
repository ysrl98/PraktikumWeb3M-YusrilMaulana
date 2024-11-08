<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kustomer extends CI_Controller {
    public function index()
    {
        $data = array(
            'title' => 'Laporan Data Kustomer',
            'content' => 'kustomer/laporan'
        );
        $this->load->view('template/main',$data);
    }
}