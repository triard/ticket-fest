<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CategoryClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/ticket-fest/Category";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['menu'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Category";
        $this->load->view('admin/_partials/head', $data, FALSE);
        $this->load->view('admin/category/index', $data, FALSE);
        $this->load->view('admin/_partials/footer', $data, FALSE);

    }

    public function post()
    {
        $data['title'] = "Tambah Data Menu";
        $this->load->view('admin/category/post', $data, FALSE);
    }

    public function post_process()
    {
        $data = array(
            'name'          => $this->input->post('name'),
            'desc'          => $this->input->post('desc'),
        );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data Menu Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data Menu Gagal Ditambahkan');
        }
        redirect('CategoryClient');
    }

    public function put()
    {
        $params = array('id_category' =>  $this->uri->segment(3));
        $data['menu'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data Menu";
         $this->load->view('admin/category/put', $data, FALSE);
     }

    public function put_process()
    {
        $data = array(
            'id_category'          => $this->input->post('id_category'),
            'name'                 => $this->input->post('name'),
            'desc'                  => $this->input->post('desc')
        );
        $update =  $this->curl->simple_put($this->API.'/Category', $data, array(CURLOPT_BUFFERSIZE => 10)); 
        if($update)
        {
            $this->session->set_flashdata('hasil','Update Data Berhasil');
        }else
        {
           $this->session->set_flashdata('hasil','Update Data Gagal');
        }
        redirect('CategoryClient/');
    }

    public function delete()
    {
        $params = array('id_category' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Menu Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Menu Gagal');
        }
        redirect('CategoryClient');
    }
}