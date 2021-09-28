<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Items_Model;

class Items extends BaseController
{
    protected $items;
 
    function __construct()
    {
        $this->items = new Items_Model();
    }
    public function index()
    {
        $data = array(
            'title' => 'items',
            'items' => $this->items->findAll(),
            'isi'   => 'items/items'
        );
        return view('layout/wrapper', $data);     

    }

    public function tambah()
    {
        $data = array(
            'title' => 'items',
            'isi'   => 'items/create'
        );
        return view('layout/wrapper', $data);

    }
    public function add()
    {
        if (!$this->validate([
            'id_items' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'stock' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
           
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->items->insert([
            'id_items' => $this->request->getVar('id_items'),
            'name'         => $this->request->getVar('name'),
            'price'  => $this->request->getVar('price'),
            'stock'  => $this->request->getVar('stock')
        ]);
        session()->setFlashdata('message', 'Tambah Data items Berhasil !!!');
        return redirect()->to('items');
    }

    public function edit($id)
    {
        $dataItems = $this->items->find($id);
        if (empty($dataItems)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Items Tidak ditemukan !');
        }

        $data = array(
            'title' => 'items',
            'items' => $dataItems,
            'isi'   => 'items/edit'
        );
        return view('layout/wrapper', $data);
    }

    public function update($id)
    {
       
        if (!$this->validate([
            'id_items' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'price' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'stock' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
 
        $this->items->update($id, [
            'id_items'         => $this->request->getVar('id_items'),
            'name'         => $this->request->getVar('name'),
            'price'  => $this->request->getVar('price'),
            'stock'  => $this->request->getVar('stock')
        ]);
        session()->setFlashdata('message', 'Update Data items Berhasil !!!');
        return redirect()->to('items');
    }
 
    function delete($id)
    {
        $dataItems = $this->items->find($id);
        if (empty($dataItems)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ITems Tidak ditemukan !');
        }
        $this->items->delete($id);
        session()->setFlashdata('message', 'Delete Data items Berhasil!!!');
        return redirect()->to('items');
    }
}