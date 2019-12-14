<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TicketClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/ticket-fest/Ticket";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['ticket'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Ticket";
        $this->load->view('admin/_partials/head', $data, FALSE);
        $this->load->view('admin/ticket/index', $data, FALSE);
        $this->load->view('admin/_partials/footer', $data, FALSE);

    }

    public function post()
    {
        $data['title'] = "Tambah";
        $this->load->view('admin/ticket/post', $data, FALSE);
    }

    public function post_process()
    {
        $data = array(
            'fest_name'         => $this->input->post('fest_name'),
            'category'          => $this->input->post('category'),
            'qty'               => $this->input->post('qty'),
            'price'             => $this->input->post('price')
        );
        $insert =  $this->curl->simple_post($this->API, $data);
        if ($insert) {
            $this->session->set_flashdata('result', 'Data Menu Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data Menu Gagal Ditambahkan');
        }
        redirect('TicketClient');
    }

    public function put()
    {
        $params = array('id_ticket' =>  $this->uri->segment(3));
        $data['ticket'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data";
         $this->load->view('admin/ticket/put', $data, FALSE);
     }

    public function put_process()
    {
        $data = array(
            'id_ticket'         =>$this->input->post('id_ticket'),
            'fest_name'         => $this->input->post('fest_name'),
            'category'          => $this->input->post('category'),
            'qty'               => $this->input->post('qty'),
            'price'             => $this->input->post('price')
        );
        $update =  $this->curl->simple_put($this->API, $data, array(CURLOPT_BUFFERSIZE => 10));
        // var_dump($update);die; 
        if($update)
        {
            $this->session->set_flashdata('hasil','Update Data Berhasil');
        }else
        {
           $this->session->set_flashdata('hasil','Update Data Gagal');
        }
        redirect('TicketClient/');
    }

    public function delete()
    {
        $params = array('id_ticket' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Menu Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Menu Gagal');
        }
        redirect('TicketClient');
    }
}