<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Welcome extends CI_Controller
{



    public function index()
    {
        $this->load->view('template/nav');
        $this->load->view('index');
        $this->load->view('template/footer');
    }


    public function evaluasi()
    {
        $this->load->view('template/nav');
        $this->load->view('evaluasi');
        $this->load->view('template/footer');
    }

    public function materi()
    {
        $this->load->view('template/nav');
        $this->load->view('materi');
        $this->load->view('template/footer');
    }

    public function latihan()
    {
        $this->load->view('template/nav');
        $this->load->view('latihan');
        $this->load->view('template/footer');
    }

    public function materi1()
    {
        $this->load->view('template/nav');
        $this->load->view('materi-full/materi1');
        $this->load->view('template/footer');
    }
    public function materi2()
    {
        $this->load->view('template/nav');
        $this->load->view('materi-full/materi2');
        $this->load->view('template/footer');
    }
    public function materi3()
    {
        $this->load->view('template/nav');
        $this->load->view('materi-full/materi3');
        $this->load->view('template/footer');
    }
    public function materi4()
    {
        $this->load->view('template/nav');
        $this->load->view('materi-full/materi4');
        $this->load->view('template/footer');
    }
    public function materi5()
    {
        $this->load->view('template/nav');
        $this->load->view('materi-full/materi5');
        $this->load->view('template/footer');
    }
}
