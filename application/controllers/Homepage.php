<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('tglindo_helper');
        $this->load->model('getkod_model');
        $this->getsecurity();
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        $data['title'] = "Home";
        $data['order'] = $this->db->query("SELECT count(kd_order) FROM tbl_order WHERE status_order ='1'")->result_array();
        $data['tiket'] = $this->db->query("SELECT count(kd_tiket) FROM tbl_tiket ")->result_array();
        $data['konfirmasi'] = $this->db->query("SELECT count(kd_konfirmasi) FROM tbl_konfirmasi ")->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('home', $data);
        $this->load->view('template/footer');
    }

    public function getsecurity($value = '')
    {
        $username = $this->session->userdata('username_admin');
        if (empty($username)) {
            $this->session->sess_destroy();
            redirect('backend/login');
        }
    }

    public function pemesanan()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pages/forms/general');
        $this->load->view('template/footer');
    }
}
