<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PerpustakaanHitung extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Perpustakaan');
    }

    public function index()
    {        
        $this->perpustakaan->HitungBuku(150, 300, 100, 200);
    }
}
