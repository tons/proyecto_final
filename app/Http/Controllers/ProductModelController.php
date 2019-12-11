<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;

class ProductModelController extends Controller
{
    // Listar productos
    public function list(){

    public function directory() {
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







  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)

  {

  }

}

?>
