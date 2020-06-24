<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        // if (!$this->session->userdata('id')) {
        //     redirect('auth');
        // }

        $data['title'] = 'Halaman Admin';

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/templates/footer');
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function produk()
    {
        $data['title'] = 'Produk';
        $data['product'] = $this->Model_Product->tampil_data($this->input->post('category'))->result();
        $data['category'] = $this->Model_Product->tampil_kategori()->result();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/produk');
        $this->load->view('admin/templates/footer');
    }

    public function laporan()
    {
        $type = $this->input->get('type');
        $data['from'] = $from = $this->input->post('from');
        $data['to'] = $to = $this->input->post('to');

        $data['title'] = 'Laporan';

        if ($type == 'date') {
            $data['transaksi'] = $this->Model_Transaksi->transaksi('date', $from, $to)->result();
        } else {
            $data['transaksi'] = $this->Model_Transaksi->transaksi(null, null, null)->result();
        }



        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/laporan');
        $this->load->view('admin/templates/footer');
    }

    public function filter()
    {
        $from = $this->input->post('from');
        $to = $this->input->post('to');

        $data['transaksi'] = $this->Model_Transaksi->filter_transaksi($from, $to)->result();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/laporan');
        $this->load->view('admin/templates/footer');
    }
}
