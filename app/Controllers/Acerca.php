<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Acerca extends BaseController
{
    public function index()
    {
        
    }

    public function acerca(){
        $juegoModel = model('juegoModel');
        $data['acercas']=$juegoModel ->findAll();
        return
        view('common/head').
        view('common/menu').
        view('Info/acerca', $data).
        view('common/footer');
        }
    
    public function acerca1(){

        $juegoModel = model('juegoModel');
        $data['acercas']=$juegoModel ->findAll();
        return
        view('common/head').
        view('common/cliente').
        view('Info/cerca1', $data).
        view('common/footer');
        }
}