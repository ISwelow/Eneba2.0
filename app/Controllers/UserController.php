<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        $data['title'] = "Agregar";
        $validation = \Config\Services::validation();

        if (strtolower($this->request->getMethod()) === 'get') {
            return view('common/head') .
                view('usuario/login') .
                view('common/footer');
        }

        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('common/head') .
                view('usuario/login') .
                view('common/footer');
        } else {
            // Si pasa las reglas
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $UserModel = model('UserModel');
            $data['usuario'] = $UserModel->like('email', $email)
                ->like('password', $password)
                ->findAll();

            if (count($data['usuario']) > 0) {
                // Crear la sesión
                $session = session();

                $newdata = [
                    'idUser' => $data['usuario'][0]->idUser,
                    'email' => $data['usuario'][0]->email,
                    'logged_in' => true,
                    'tipo'=> $data['usuario'][0]->tipo,
                ];

                $session->set($newdata);
if($session->get('tipo')=='Administrador'){
    return redirect()->to('Juegos/mostrar');
}else {
    return  redirect()->to('Juegos/mostrar1');

}   
            }
}
}
}