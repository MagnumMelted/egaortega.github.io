<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Nikel extends CI_Controller { 
    public function index() 
    { 
        $data= array( 
        'judul' => 'Sumber Daya Alam - GeoLab UPI', 
        'content' => 'sda_view'
        ); 
    $this->load->view('nikel_view', $data, FALSE); 
    } 
} 