<?php

namespace App\Controllers;

use App\Models\Model_Auth;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->Model_Auth = new Model_Auth();
    }

    public function register()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('register', $data);
    }

    public function save_register()
    {
        if ($this->validate([
            'username'=>[
                'label' =>'Username',
                'rules' =>'required',
                'errors' => [
                    'required' => '{field} Wajib diisi tidak boleh kosong !!!'
                ]               
        ],
        'full_name'=>[
            'label' =>'Nama Panjang',
            'rules' =>'required',
            'errors' => [
                'required' => '{field} Wajib diisi tidak boleh kosong !!!'
            ]               
        ],
        'password  '=>[
            'label' =>'Password',
            'rules' =>'required',
            'errors' => [
                'required' => '{field} Wajib diisi tidak boleh kosong !!!'
            ]               
        ],
        'repassword  '=>[
            'label' =>'Retype Password',
            'rules' =>'required|matches[password]',
            'errors' => [
                'required' => '{field} Wajib diisi tidak boleh kosong !!!',
                'matches' => '{field} Password Tidak Sama!!!'
            ]               
        ],
        ])) { 
            $data = array(
                'full_name' => $this->request->getPost('full_name'),
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'level' => 2
            );
            $this->Model_Auth->save_register($data);
            session()->setFlashdata('pesan', 'Register Berhasil :) !!!');
            return redirect()->to(base_url('Auth/register'));
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/register'));
        }
    }

    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('login', $data);
    }
    public function cek_login()
    {
        if ($this->validate([
            'username'=>[
                'label' =>'Username',
                'rules' =>'required',
                'errors' => [
                    'required' => '{field} Wajib diisi tidak boleh kosong !!!'
                ]               
        ],
            'password  '=>[
            'label' =>'Password',
            'rules' =>'required',
            'errors' => [
                'required' => '{field} Wajib diisi tidak boleh kosong !!!'
                ]
            ],            
            ])) { 
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');
                $cek = $this->Model_Auth->login($username, $password);
                if($cek){
                    session()->set('log', true);
                    session()->set('full_name', $cek['full_name']);
                    session()->set('username', $cek['username']);
                    session()->set('level', $cek['level']);
                    session()->set('foto_user', $cek['foto_user']);

                    return redirect()->to(base_url('home'));
                }else{
                    session()->setFlashdata('pesan','Login Gagal !!! Username atau Password Tidak Cocok !!!');                    
                    return redirect()->to(base_url('auth/login'));
                }
        
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }

    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('full_name');
        session()->remove('log');
        session()->remove('foto_user');
        session()->setFlashdata('pesan','Logout Sukses !!!');                    
        return redirect()->to(base_url('auth/login'));

    }

}