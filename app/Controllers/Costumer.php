<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Costumer_Model;

class Costumer extends BaseController
{
    protected $costumer;
 
    function __construct()
    {
        $this->costumer = new Costumer_Model();
    }
    public function index()
    {
        $data = array(
            'title' => 'Costumer',
            'costumer' => $this->costumer->findAll(),
            'isi'   => 'costumer/costumer'
        );
        return view('layout/wrapper', $data);     

    }

    public function tambah()
    {
        $data = array(
            'title' => 'Costumer',
            'isi'   => 'costumer/create'
        );
        return view('layout/wrapper', $data);

    }
    public function add()
    // {
    //     $model = new Costumer_model;
    //     $data = array(
            
    //     );
    //     $model->saveCostumer($data);
    //     echo '<script>
    //             alert("Sukses Tambah Data Costumer");
    //             window.location="'.base_url('costumer').'"
    //         </script>';
    // }  
    {
        if (!$this->validate([
            'kd_costumer' => [
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
            'phone_number' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
           
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->costumer->insert([
            'kd_costumer' => $this->request->getVar('kd_costumer'),
            'name'         => $this->request->getVar('name'),
            'phone_number'  => $this->request->getVar('phone_number'),
            'address'  => $this->request->getVar('address')
        ]);
        session()->setFlashdata('message', 'Tambah Data Costumer Berhasil !!!');
        return redirect()->to('costumer');
    }

    public function edit($id)
    {
        // $model = new Costumer_model;
        // $getCostumer = $model->getCostumer($id)->getRow();
        // if(isset($getCostumer))
        // {
        //     $data['costumer'] = $getCostumer;
        //     $data = array(
        //         'title' => 'Costumer',
        //         'isi'   => 'costumer/edit'
        //     );
        //     return view('layout/wrapper', $data);
        // }else{

        //     echo '<script>
        //             alert("ID Costumer '.$id.' Tidak ditemukan");
        //             window.location="'.base_url('sostumer').'"
        //         </script>';
        // }
        $dataCostumer = $this->costumer->find($id);
        if (empty($dataCostumer)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Costumer Tidak ditemukan !');
        }

        $data = array(
            'title' => 'Costumer',
            'costumer' => $dataCostumer,
            'isi'   => 'costumer/edit'
        );
        return view('layout/wrapper', $data);
    }

    public function update($id)
    {
        // $model = new Costumer_model;
        // $id = $this->request->getPost('id_costumer');
        // $data = array(
        //     'name'         => $this->request->getPost('name'),
        //     'phone_number'  => $this->request->getPost('phone_number'),
        //     'address'  => $this->request->getPost('address')
        // );
        // $model->editCostumer($data,$id);
        // echo '<script>
        //         alert("Sukses Edit Data Costumer");
        //         window.location="'.base_url('costumer').'"
        //     </script>';
        if (!$this->validate([
            'kd_costumer' => [
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
            'phone_number' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
 
        $this->costumer->update($id, [
            'kd_costumer'         => $this->request->getVar('kd_costumer'),
            'name'         => $this->request->getVar('name'),
            'phone_number'  => $this->request->getVar('phone_number'),
            'address'  => $this->request->getVar('address')
        ]);
        session()->setFlashdata('message', 'Update Data Costumer Berhasil !!!');
        return redirect()->to('costumer');
    }
 
    function delete($id)
    {
        $dataCostumer = $this->costumer->find($id);
        if (empty($dataCostumer)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Costumer Tidak ditemukan !');
        }
        $this->costumer->delete($id);
        session()->setFlashdata('message', 'Delete Data Costumer Berhasil!!!');
        return redirect()->to('costumer');
    }
}