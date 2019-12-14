<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UsersClient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/ticket-fest/Users";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['users'] = json_decode($this->curl->simple_get($this->API));
        $data['title'] = "Users";
        $this->load->view('admin/_partials/head', $data, FALSE);
        $this->load->view('admin/users/index', $data, FALSE);
        $this->load->view('admin/_partials/footer', $data, FALSE);

    }

    public function post()
    {
        $data['title'] = "Tambah";
        $this->load->view('admin/users/post', $data, FALSE);
    }

    public function post_process()
    {
            $data = array(
                'name'              => $this->input->post('name'),
                'username'          => $this->input->post('username'),
                'password'          => $this->input->post('password'),
                'email'             => $this->input->post('email'),
                'addres'            => $this->input->post('addres'),
                'telephone'         => $this->input->post('telephone')
            );
        $insert =  $this->curl->simple_post($this->API, $data);
        
        if ($insert) {
            $this->session->set_flashdata('result', 'Data Menu Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data Menu Gagal Ditambahkan');
        }
        redirect('UsersClient');
    }

    public function put()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $data['users'] = json_decode($this->curl->simple_get($this->API, $params));
        $data['title'] = "Edit Data";
         $this->load->view('admin/users/put', $data, FALSE);
     }

    public function put_process()
    {
        $data = array(
            'id_user'           => $this->input->post('id_user'),
            'name'              => $this->input->post('name'),
            'username'          => $this->input->post('username'),
            'password'          => $this->input->post('password'),
            'email'             => $this->input->post('email'),
            'addres'            => $this->input->post('addres'),
            'telephone'         => $this->input->post('telephone')
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
        redirect('UsersClient/');
    }

    public function delete()
    {
        $params = array('id_user' =>  $this->uri->segment(3));
        $delete =  $this->curl->simple_delete($this->API, $params);
        if ($delete) {
            $this->session->set_flashdata('result', 'Hapus Data Menu Berhasil');
        } else {
            $this->session->set_flashdata('result', 'Hapus Data Menu Gagal');
        }
        redirect('UsersClient');
    }
}