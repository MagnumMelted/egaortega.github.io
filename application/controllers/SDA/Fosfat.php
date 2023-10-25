<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Fosfat extends CI_Controller { 
    public function index() 
    { 
        $data= array( 
        'judul' => 'Sumber Daya Alam - GeoLab UPI', 
        'content' => 'sda_view'
        ); 
    $this->load->view('fosfat_view', $data, FALSE); 
    } 
} 