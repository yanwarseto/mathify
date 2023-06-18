<?php
class Quisioner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_quisioner');
    }

    public function index()
    {
    }

    public function submit()
    {
        // Proses jawaban quisioner
        // ...
        // Redirect atau tampilkan halaman hasil
    }
}
