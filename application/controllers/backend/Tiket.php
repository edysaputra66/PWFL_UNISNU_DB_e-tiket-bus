<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tiket extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('tglindo_helper');
        $this->load->model('getkod_model');
        $this->getsecurity();
        date_default_timezone_set("Asia/Jakarta");
    }
    function getsecurity($value = '')
    {
        $username = $this->session->userdata('username_admin');
        if (empty($username)) {
            $this->session->sess_destroy();
            redirect('backend/login');
        }
    }
    public function index()
    {
        $data['title'] = "List Tiket";
        $data['tiket'] = $this->db->query("SELECT * FROM tbl_tiket ")->result_array();
        // die(print_r($data));
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('backend/tiket', $data);
        $this->load->view('template/footer');
    }
    public function viewtiket($tiket)
    {
        $data['title'] = "List Tiket";
        $data['tiket'] = $this->db->query("SELECT * FROM tbl_tiket WHERE kd_tiket = '" . $tiket . "'")->row_array();
        if ($data['tiket']) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('backend/view_tiket', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'swal("Kosong", "Tiket Tidak Ada", "error");');
            redirect('backend/tiket');
        }
    }
}

/* End of file Tiket.php */
/* Location: ./application/controllers/backend/Tiket.php */
