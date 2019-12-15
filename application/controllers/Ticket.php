<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Ticket extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
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

    // public function upload_post()
    // {
    //     $this->load->helper(array('form', 'url'));
    
    //     $config = array(
    //         'upload_path' => "./upload/product/",
    //         'allowed_types' => "gif|jpg|png|jpeg|pdf",
    //         'overwrite' => TRUE,

    //     );
    
    //     $this->load->library('upload',$config);
    
    //     if($this->upload->do_upload('images'))
    //     {
    //         $data = array('upload_data' => $this->upload->data());
    //         $this->set_response($data, REST_Controller::HTTP_CREATED);
    //     }
    //     else
    //     {
    //         $error = array('error' => $this->upload->display_errors());
    //         $this->response($error, REST_Controller::HTTP_BAD_REQUEST);
    //     }
    
    // }

  

    //Mengirim atau menambah data kontak baru
    function index_post()
    {
        $data = array(
            'id_ticket'                  => $this->post('id_ticket'),
            'fest_name'                  => $this->post('fest_name'),
            'category'                   => $this->post('category'),
            'qty'                        => $this->post('qty'),
            'price'                      => $this->post('price'),
            
            'images'                     => $this->upload_post(),
            'date'                       => $this->post('date')
        );
        $insert = $this->db->insert('ticket', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    private function upload_post()
    {
        $config['upload_path']          = './upload/product/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->input->id_ticket;
        $config['overwrite']            = true;
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('images')) {
            return $this->upload->data("images");
        }
        print_r($this->upload->display_errors());
        return "default.png";
    }

    //Memperbarui data kontak yang telah ada
    function index_put()
    {
        $id = $this->put('id_ticket');
        $data = array(
            'id_ticket'                  => $this->put('id_ticket'),
            'fest_name'                  => $this->put('fest_name'),
            'category'                   => $this->put('category'),
            'qty'                        => $this->put('qty'),
            'price'                      => $this->put('price'),
            'images'                     => $this->upload_post(),
            'date'                       => $this->post('date')            

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