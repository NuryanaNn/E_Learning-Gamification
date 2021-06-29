<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kelas extends CI_Controller {

    public function index()
    {
        $this->load->view('part/header');
        $this->load->view('part/sidebarsiswa');
        $this->load->view('siswa/dashboard');
        $this->load->view('part/footer');       
    }

}
?>