<?php

namespace App\Controllers;

class Order_Detail extends BaseController
{
    public function __construct()
	{
          if(!session()->get('level')==2){
                echo 'Pegawai';
                return redirect()->to(base_url('home'));
            //   }else if (session()->get('level') == 2){
            //     echo 'Pegawai';
            //     return redirect()->to(base_url('home'));
            //   }
         
        }
    }

    public function index()
    {
        $data = array(
            'title' => 'Order',
            'isi'   => 'order/order_detail'
        );
        return view('layout/wrapper', $data);

    }

    public function create()
    {
        $data = array(
            'title' => 'Order',
            'isi'   => 'order/create_detail'
        );
        return view('layout/wrapper', $data);

    }  
  
}
