<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Users extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data User
    function index_get() {
        $id = $this->get('id_user');
        if ($id == '') {
            $kontak = $this->db->get('users')->result();
        } else {
            $this->db->where('id_user', $id);
            $kontak = $this->db->get('users')->result();
        }
        $this->response($kontak, 200);
    }

    //Mengirim atau menambah data kontak baru
    function index_post()
    {
        $data = array(
            'id_user'           => $this->post('id_user'),
            'name'              => $this->post('name'),
            'username'          => $this->post('username'),
            'password'          => $this->post('password'),
            'email'             => $this->post('email'),
            'addres'            => $this->post('addres'),
            'telephone'         => $this->post('telephone')
        );
        $insert = $this->db->insert('users', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data kontak yang telah ada
    function index_put()
    {
        $id = $this->put('id_user');
        $data = array(
            'id_user'           => $this->put('id_user'),
            'name'              => $this->put('name'),
            'username'          => $this->put('username'),
            'password'          => $this->put('password'),
            'email'             => $this->put('email'),
            'addres'            => $this->put('addres'),
            'telephone'         => $this->put('telephone')
        );
        $this->db->where('id_user', $id);
        $update = $this->db->update('users', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete()
    {
        $id = $this->delete('id_user');
        $this->db->where('id_user', $id);
        $delete = $this->db->delete('users');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>