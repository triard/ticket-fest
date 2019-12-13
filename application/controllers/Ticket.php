<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Ticket extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data User
    function index_get() {
        $id = $this->get('id_ticket');
        if ($id == '') {
            $ticket = $this->db->get('ticket')->result();
        } else {
            $this->db->where('id_ticket', $id);
            $ticket = $this->db->get('ticket')->result();
        }
        $this->response($ticket, 200);
    }

    //Mengirim atau menambah data kontak baru
    function index_post()
    {
        $data = array(
            'id_ticket'                  => $this->post('id_ticket'),
            'fest_name'                  => $this->post('fest_name'),
            'category'                   => $this->post('category'),
            'qty'                        => $this->post('qty'),
            'price'                      => $this->post('price')
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
        $id = $this->put('id_user');
        $data = array(
            'id_ticket'                  => $this->put('id_ticket'),
            'fest_name'                  => $this->put('fest_name'),
            'category'                   => $this->put('category'),
            'qty'                        => $this->put('qty'),
            'price'                      => $this->put('price')
        );
        $this->db->where('id_ticket', $id);
        $update = $this->db->update('ticket', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete()
    {
        $id = $this->delete('id_ticket');
        $this->db->where('id_ticket', $id);
        $delete = $this->db->delete('ticket');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>