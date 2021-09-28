<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Order_Model;

class Order extends BaseController
{
    protected $order;
 
    function __construct()
    {
        $this->order = new Order_Model();
    }
    public function index()
	{
		$model = new Order_Model();
		$data = array(
			
            'title' => 'Order',
            'order' => $model->getOrder(),
            'isi'   => 'order/order'
        );
        return view('layout/wrapper', $data);
	}

	public function tambah()
	{
		
		$data = array(
			
            'title' => 'Order',
            
            'isi'   => 'order/create'
        );
        return view('layout/wrapper', $data);
	}

	public function add()
	{
		if (!$this->validate([
            'id_order' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'id_pegawai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'id_costumer' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'date' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
           
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->order->insert([
            'id_order' => $this->request->getVar('id_order'),
            'id_users'         => $this->request->getVar('id_users'),
            'id_costumer'  => $this->request->getVar('id_costumer'),
            'stock'  => $this->request->getVar('stock')
        ]);
        session()->setFlashdata('message', 'Tambah Data order Berhasil !!!');
        return redirect()->to('order');
	}

	public function process()
	{
		$post=$this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->category_m->add($post);
		} else if(isset($_POST['edit'])){
			$this->category_m->edit($post);
		}

		if($this->db->affected_rows() > 0){
			// fungsi alert dari CI
			$this->session->set_flashdata('success','Data Berhasil disimpan');
		}
		// fungsi redirect dari CI
		redirect('category');
	}

	// metode Get
	public function del($id)
	{
		$this->category_m->del($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('success','Data Berhasil dihapus');
		}
		redirect('category');
	}

}
