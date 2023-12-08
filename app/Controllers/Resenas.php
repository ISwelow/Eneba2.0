<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Resenas extends BaseController
{
    public function index()
    {
        
    }

    public function mostrar(){
        $resenaModel = model('resenaModel');
        $data['resenas']=$resenaModel ->findAll();
        return
        view('common/head').
        view('common/menu').
        view('reseñas/mostrar', $data).
        view('common/footer');
        }

        public function mostrar1(){
            $resenaModel = model('resenaModel');
            $data['resenas']=$resenaModel ->findAll();
            return
            view('common/head').
            view('common/cliente').
            view('reseñas/mostrar1', $data).
            view('common/footer');
            }
    
    
        public function agregar(){
            $resenaModel = model('resenaModel');
            $data['resenas']=$resenaModel ->findAll();
            $validation =  \Config\Services::validation();
            
            if ((strtolower($this->request->getMethod()) !== 'get')) {
                return 
                view('common/head') .
                view('common/menu') .
                view('reseñas/agregar',$data) .
                view('common/footer');
            }
    
            $rules = [];
    
            if (! $this->validate($rules)) {
                return 
                view('common/head') .
            view('common/menu') .
            view('reseñas/agregar',$data,['validation' => $validation]) .
            view('common/footer');
            }
    
        }
        public function agregar1(){
            $resenaModel = model('resenaModel');
            $data['resenas']=$resenaModel ->findAll();
            $validation =  \Config\Services::validation();
            
            if ((strtolower($this->request->getMethod()) !== 'get')) {
                return 
                view('common/head') .
                view('common/cliente') .
                view('reseñas/agregar',$data) .
                view('common/footer');
            }
            $rules = [];
    
            if (! $this->validate($rules)) {
                return 
                view('common/head') .
            view('common/cliente') .
            view('reseñas/agregar1',$data,['validation' => $validation]) .
            view('common/footer');
            }
    
        }
    
    
        public function insert(){
            $resenaModel = model('resenaModel');
            $data = [ 
                'nombre'=>$_POST['nombre'],
                "calificacion"=> $_POST['calificacion'],
                "pais"=> $_POST['pais'],
                "fecha_creacion" => $_POST['fecha_creacion'],
                "comentario" => $_POST['comentario']
               
    
            ];

            $resenaModel->insert($data, false);
            return redirect('reseñas/mostrar','refresh');
        }

        public function insert1(){
            $resenaModel = model('resenaModel');
            $data = [ 
                'nombre'=>$_POST['nombre'],
                "calificacion"=> $_POST['calificacion'],
                "pais"=> $_POST['pais'],
                "fecha_creacion" => $_POST['fecha_creacion'],
                "comentario" => $_POST['comentario']
               
    
            ];

            $resenaModel->insert1($data, false);
            return redirect('reseñas/mostrar1','refresh');
        }
    

        public function deleted($idResena){
            $resenaModel = model('resenaModel');
            $resenaModel->delete($idResena);
            return redirect('reseñas/mostrar', 'refresh');
    
        }
        public function deleted1($idResena){
            $resenaModel = model('resenaModel');
            $resenaModel->delete($idResena);
            return redirect('reseñas/mostrar1', 'refresh');
    
        }
    
    
        public function editar($idResena){
            $resenaModel = model('resenaModel');
            $data['resenas'] = $resenaModel->find($idResena);
    
            return
            view('common/head') .
            view('common/menu') .
            view('reseñas/editar', $data) .
            view('common/footer');
        }
        public function update(){
            $resenaModel = model('resenaModel');
            $data = [
                "nombre"=> $_POST['nombre'],
                "calificacion"=> $_POST['calificacion'],
                "pais"=> $_POST['pais'],
                "fecha_creacion" => $_POST['fecha_creacion'],
                "comentario" => $_POST['comentario']

    
            ];
            $resenaModel->update($_POST['idResena'], $data);
            return redirect('reseñas/mostrar','refresh');
        }

        public function update1(){
            $resenaModel = model('resenaModel');
            $data = [

                "nombre"=> $_POST['nombre'],
                "calificacion"=> $_POST['calificacion'],
                "pais"=> $_POST['pais'],
                "fecha_creacion" => $_POST['fecha_creacion'],
                "comentario" => $_POST['comentario']

    
            ];
            $resenaModel->update1($_POST['idResena'], $data);
            return redirect('reseñas/mostrar1','refresh');
        }
    
        public function buscar(){
            $resenaModel = model('resenaModel');
            if(isset($_GET['nombre'])){
                $nombre = $_GET['nombre'];
                $genero=$_GET['genero'];
                $data['reseñas']= $resenaModel->like('nombre',$nombre)
                                    ->Like('genero',$genero)
                                    ->findAll();
            }
            else{
                $nombre = "";
                $data['reseñas']=$resenaModel->findAll();
            }
    
            return 
                view('common/head') .
                view('common/menu') .
                view('reseñas/buscar',$data) .
                view('common/footer');
        }
        public function buscar1(){
            $resenaModel = model('resenaModel');
            if(isset($_GET['nombre'])){
                $nombre = $_GET['nombre'];
                $genero=$_GET['genero'];
                $data['reseñas']= $resenaModel->like('nombre',$nombre)
                                    ->Like('genero',$genero)
                                    ->findAll();
            }
            else{
                $nombre = "";
                $data['reseñas']=$resenaModel->findAll();
            }
    
            return 
                view('common/head') .
                view('common/cliente') .
                view('reseñas/buscar1',$data) .
                view('common/footer');
        }
}

