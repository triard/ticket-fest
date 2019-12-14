<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Category extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data User
    function index_get() {
        $id = $this->get('id_category');
        if ($id == '') {
            $kontak = $this->db->get('category')->result();
        } else {
            $this->db->where('id_category', $id);
            $kontak = $this->db->get('category')->result();
        }
        $this->response($kontak, 200);
    }

    //Mengirim atau menambah data kontak baru
    function index_post()
    {
        $data = array(
            'id_category'           => $this->post('id_category'),
            'name'                  => $this->post('name'),
            'desc'                  => $this->post('desc')
        );
        $insert = $this->db->insert('category', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data kontak yang telah ada
    function index_put()
    {
        $id = $this->put('id_category');
        $data = array(
            'id_category'           => $this->put('id_category'),
            'name'                  => $this->put('name'),
            'desc'                  => $this->put('desc')
        );
        $this->db->where('id_category', $id);
        $update = $this->db->update('category', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete()
    {
        $id = $this->delete('id_category');
        $this->db->where('id_category', $id);
        $delete = $this->db->delete('category');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>