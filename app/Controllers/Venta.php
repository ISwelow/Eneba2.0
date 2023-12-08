<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Venta extends BaseController
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
        $data['ventas']=$juegoModel ->findAll();
        return
        view('common/head').
        view('common/menu').
        view('Ventas/mostrar', $data).
        view('common/footer');
        }

    
        public function agregar($idJuego){
            $juegoModel = model('juegoModel');
            $data['ventas']=$juegoModel ->find($idJuego);
            $validation =  \Config\Services::validation();
            
            if ((strtolower($this->request->getMethod()) !== 'get')) {
                return 
                view('common/head') .
                view('common/menu') .
                view('Ventas/agregar',$data) .
                view('common/footer');
            }
    
            $rules = [];
    
            if (! $this->validate($rules)) {
                return 
                view('common/head') .
            view('common/menu') .
            view('Ventas/agregar',$data,['validation' => $validation]) .
            view('common/footer');
            }
    
        }
    
    
        public function insert(){
            $juegoModel = model('juegoModel');
            $data = [ 
                "imagen"=> $_POST['imagen'],
                "video"=> $_POST['video'],
                "nombre" => $_POST['nombre'],
                "descripcion" => $_POST['descripcion'],
                "plataforma"=>$_POST['plataforma'],
                "genero" => $_POST['genero'],
                "desarrollador" => $_POST['desarrollador'],
                "editor" => $_POST['editor'],
                "fecha_lanzamiento" => $_POST['fecha_lanzamiento'],
                "precio" => $_POST['precio']
               
                
    
            ];

            $juegoModel->insert($data, false);
            return redirect('Ventas/mostrar','refresh');
        }
    
        public function delete($idjuego){
            $juegoModel = model('juegoModel');
            $juegoModel->delete($idjuego);
            return redirect('Ventas/mostrar', 'refresh');
    
        }
    
    
        public function editar($idJuego){
            $juegoModel = model('juegoModel');
            $data['ventas'] = $juegoModel->find($idJuego);
    
            return
            view('common/head') .
            view('common/menu') .
            view('Ventas/editar', $data) .
            view('common/footer');
        }
        public function update(){
            $juegoModel = model('juegoModel');
            $data = [
                "imagen" => $_POST['imagen'],
                "nombre" => $_POST['nombre'],
                "descripcion" => $_POST['descripcion'],
                "plataforma"=>$_POST['plataforma'],
                "genero" => $_POST['genero'],
                "desarrollador" => $_POST['desarrollador'],
                "editor" => $_POST['editor'],
                "fecha_lanzamiento" => $_POST['fecha_lanzamiento'],
                "precio" => $_POST['precio']
    
            ];
            $juegoModel->update($_POST['idJuego'], $data);
            return redirect('Ventas/mostrar','refresh');
        }
    
        public function buscar(){
            $juegoModel = model('juegoModel');
            if(isset($_GET['nombre'])){
                $nombre = $_GET['nombre'];
                $genero=$_GET['genero'];
                $data['ventas']= $juegoModel->like('nombre',$nombre)
                                    ->Like('genero',$genero)
                                    ->findAll();
            }
            else{
                $nombre = "";
                $data['ventas']=$juegoModel->findAll();
            }
    
            return 
                view('common/head') .
                view('common/menu') .
                view('Ventas/buscar',$data) .
                view('common/footer');
        }
}

