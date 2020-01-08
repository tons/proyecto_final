<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    // Listar usuarios
    public function list() {
        $list = User::orderby('id')->get();
        return view('cms.users', compact('list'));
    }

    public function profile($id) {
        $item = [];
        $item ['profile'] = User::find($id);
        return view('profile', $item);
    }

 // Mostrar vistas
 public function createOrEdit($id = null)
 {
     $data = [];
     // Si el controlador no recibe un ID, es creación
     if (!$id) {
         $data['title'] = 'Crear';
         return view('cms.users.form', $data);
     }
     $data['title'] = 'Editar';
     $data['user'] = User::find($id);
     return view('cms.users.form', $data);
 }

 // Almacenar
 public function storeOrUpdate($id = null, Request $request)
 {
     // First or new nos devuelve un registro existente para editar o una instancia nueva para crear
     $user = User::firstOrNew(['id' => $id]);
     $user->fill($request->all());
     $user->save();
     return redirect(route('cms.users.list'));
 }


/*
public function obtenerDesdeClasificacion($tipoEtiqueta) {
  if($tipoEtiqueta == 'category') {
      $data['isCategpry'] = true;
      $data['list'] = ProductModel::all();
  }
}*/
}
