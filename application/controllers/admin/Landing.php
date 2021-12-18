<?php

class Landing extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mdepartemen');
		$this->load->model('Mpegawai');
		$this->load->model('Mkategori');
		$this->load->model('Mhardware');

        if(!isset($_SESSION['user']))
		{
			redirect('login');
		}
    }

    function index()
    {
        $name = "Tamu";
        if (isset($_SESSION["user"])) {
            $name = $_SESSION["user"];
        }       
        $data['judul'] = "Dashboard | " . $name['nama'];
        $data['hardware'] = $this->Mhardware->total();
        $data['departemen'] = $this->Mdepartemen->total();
        $data['kategori'] = $this->Mkategori->total();
        $data['pegawai'] = $this->Mpegawai->total();
        $this->theme->set_ui('admin/landing', $data);
    }
}
