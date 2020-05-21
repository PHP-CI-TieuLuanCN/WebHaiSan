<?php
defined('BASEPATH') or exit('No direct script access allowed');

class comment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->tempdata('admin') == null) {
            redirect(base_url() . 'admin/login.html', 'auto');
        } else {
            $this->load->model('Product_Model', 'product');
            $data = [];
            $paging_links = '';
            $products = $this->product->getAllProducts();
            $this->load->view('admin/comment', [
                'data'          => $data,
                'paging_links'  => $paging_links,
                'products'      => $products
            ]);
        }
    }

    public function filter()
    {
        if ($this->session->tempdata('admin') == null) {
            redirect(base_url() . 'admin/login.html', 'auto');
        } else {
            $data = [];
            $paging_links = '';
            $this->load->view('admin/comment', [
                'data'          => $data,
                'paging_links'  => $paging_links
            ]);
        }
    }
}
