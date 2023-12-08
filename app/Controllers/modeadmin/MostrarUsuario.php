<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Juego extends BaseController
{
    public function index()
    {
    
    }

    public function mostrar(){
        $session = session();
            if($session->get('logged_in')!=TRUE){
                return redirect('usuario/login','refresh');
                
            }
        $juegoModel = model('juegoModel');
        $data['juegos']=$juegoModel ->findAll();
        return
        view('common/head').
        view('common/menu').
        view('Juegos/mostrar1', $data).
        view('common/footer');
        }

    
        public function buscar(){
            $juegoModel = model('juegoModel');
            if(isset($_GET['nombre'])){
                $nombre = $_GET['nombre'];
                $genero=$_GET['genero'];
                $data['Juegos']= $juegoModel->like('nombre',$nombre)
                                    ->Like('genero',$genero)
                                    ->findAll();
            }
            else{
                $nombre = "";
                $data['Juegos']=$juegoModel->findAll();
            }
    
            return 
                view('common/head') .
                view('common/menu') .
                view('Juegos/buscar1',$data) .
                view('common/footer');
        }
}

