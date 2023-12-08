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
        view('Juegos/mostrar', $data).
        view('common/footer');
        }

        
        public function mostrar1(){
            $juegoModel = model('juegoModel');
            $data['juegos']=$juegoModel ->find();
            return
            view('common/head').
            view('common/cliente').
            view('Juegos/mostrar1', $data).
            view('common/footer');
            }
    
                    
        public function mostrar2($idJuego){
            $juegoModel = model('juegoModel');
            $data['juegos']=$juegoModel ->find($idJuego);
            return
            view('common/head').
            view('common/cliente').
            view('Juegos/mostrar2', $data).
            view('common/footer');
            }
    
        public function agregar(){
            $juegoModel = model('juegoModel');
            $data['juegos']=$juegoModel ->findAll();
            $validation =  \Config\Services::validation();
            
            if ((strtolower($this->request->getMethod()) !== 'get')) {
                return 
                view('common/head') .
                view('common/menu') .
                view('Juegos/agregar',$data) .
                view('common/footer');
            }
    
            $rules = [];
    
            if (! $this->validate($rules)) {
                return 
                view('common/head') .
            view('common/menu') .
            view('Juegos/agregar',$data,['validation' => $validation]) .
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
            return redirect('Juegos/mostrar','refresh');
        }
    
        public function delete($idjuego){
            $juegoModel = model('juegoModel');
            $juegoModel->delete($idjuego);
            return redirect('Juegos/mostrar', 'refresh');
    
        }
    
    
        public function editar($idJuego){
            $juegoModel = model('juegoModel');
            $data['juegos'] = $juegoModel->find($idJuego);
    
            return
            view('common/head') .
            view('common/menu') .
            view('Juegos/editar', $data) .
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
            return redirect('Juegos/mostrar','refresh');
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
                view('Juegos/buscar',$data) .
                view('common/footer');
        }
        public function buscar1(){
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
                view('common/cliente') .
                view('Juegos/buscar1',$data) .
                view('common/footer');
        }
}

