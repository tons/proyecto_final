<?php

namespace App\Http\Controllers;

use App\BrandModel;
use Illuminate\Http\Request;

class BrandModelController extends Controller
{
    // Listar marcas
        public function list() {
        $list = BrandModel::orderby('id')->get();
        dd($list);
        return view('cms.brands', compact('list'));
    }

   // Mostrar vistas
   public function createOrEdit($id = null)
   {
       $data = [];
       // Si el controlador no recibe un ID, es creación
       if (!$id) {
           $data['title'] = 'Crear';
           return view('cms.brands.form', $data);
       }
       $data['title'] = 'Editar';
       $data['brand'] = Brand::find($id);
       return view('cms.brands.form', $data);
   }

   // Almacenar
   public function storeOrUpdate($id = null, Request $request)
   {
       // First or new nos devuelve un registro existente para editar o una instancia nueva para crear
       $brand = Brand::firstOrNew(['id' => $id]);
       $brand->fill($request->all());
       $brand->save();
       return redirect(route('cms.brands.list'));
   }
  }