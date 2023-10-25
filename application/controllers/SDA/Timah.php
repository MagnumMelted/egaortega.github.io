<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Timah extends CI_Controller { 
    public function index() 
    { 
        $data= array( 
        'judul' => 'Sumber Daya Alam - GeoLab UPI', 
        'content' => 'sda_view'
        ); 
    $this->load->view('timah_view', $data, FALSE); 
    } 
} 