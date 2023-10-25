<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Perunggu extends CI_Controller { 
    public function index() 
    { 
        $data= array( 
        'judul' => 'Sumber Daya Alam - GeoLab UPI', 
        'content' => 'sda_view'
        ); 
    $this->load->view('perunggu_view', $data, FALSE); 
    } 
} 