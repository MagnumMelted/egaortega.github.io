<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Semen extends CI_Controller { 
    public function index() 
    { 
        $data= array( 
        'judul' => 'Sumber Daya Alam - GeoLab UPI', 
        'content' => 'sda_view'
        ); 
    $this->load->view('semen_view', $data, FALSE); 
    } 
} 