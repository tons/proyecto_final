<?php

namespace App\Http\Controllers;

use App\Cart;
use App\ProductModel;
use Illuminate\Http\Request;
use Session;

class ProductModelController extends Controller
{
    // Listar productos
        public function list() {
        $list = ProductModel::orderby('id')->get();
        dd($list);
        return view('cms.products', compact('list'));
    }

   // Mostrar vistas
   public function createOrEdit($id = null)
   {
       $data = [];
       // Si el controlador no recibe un ID, es creación
       if (!$id) {
           $data['title'] = 'Crear';
           return view('cms.products.form', $data);
       }
       $data['title'] = 'Editar';
       $data['product'] = Product::find($id);
       return view('cms.products.form', $data);
   }

   // Almacenar
   public function storeOrUpdate($id = null, Request $request)
   {
       // First or new nos devuelve un registro existente para editar o una instancia nueva para crear
       $product = Product::firstOrNew(['id' => $id]);
       $product->fill($request->all());
       $product->save();
       return redirect(route('cms.products.list'));
   }



public function obtenerDesdeClasificacion($tipoEtiqueta) {
    if($tipoEtiqueta == 'category') {
        $data['isCategpry'] = true;
        $data['list'] = ProductModel::all();
    }
}
public function getAddToCart (Request $request, $id) {
    $product = Product::find($id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($product, $product->id);

    $request->session()->put('cart', $cart);
    return redirect()->route('/product');
}
}