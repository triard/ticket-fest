<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Transaction extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data User
    function index_get() {
        $id = $this->get('id_trans');
        if ($id == '') {
            $ticket = $this->db->get('transaction')->result();
        } else {
            $this->db->where('id_trans', $id);
            $ticket = $this->db->get('transaction')->result();
        }
        $this->response($ticket, 200);
    }

    //Mengirim atau menambah data kontak baru
    function index_post()
    {
        $data = array(
            'id_trans'                   => $this->post('id_trans'),
            'id_ticket'                  => $this->post('id_ticket'),
            'qty'                        => $this->post('qty'),
            'date'                       => $this->post('date')
        );
        $insert = $this->db->insert('transaction', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data kontak yang telah ada
    function index_put()
    {
        $id = $this->put('id_trans');
        $data = array(
            'id_trans'                   => $this->post('id_trans'),
            'id_ticket'                  => $this->post('id_ticket'),
            'qty'                        => $this->post('qty'),
            'date'                       => $this->post('date')
        );
        $this->db->where('id_trans', $id);
        $update = $this->db->update('trans', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete()
    {
        $id = $this->delete('id_trans');
        $this->db->where('id_trans', $id);
        $delete = $this->db->delete('trans');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>