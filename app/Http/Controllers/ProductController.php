<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
/* use App\ProductModel; */
use Illuminate\Http\Request;
use Redirect;
use PDF;
use Session;

class ProductController extends Controller {


     // Mostrar producto
    public function show($id = null) {

        $product = Product::find($id

    );

        if($product) {
            return view('product', $product);
        } else {
            return abort(404);
        }

        // si el producto existe -->
        // si no existe retornar a home / Pagina no existe == 404

    }

    /** ABML *//**
     * // Listar productos
     *
     * @return \Illuminate\Http\Response
     */
    public function CmsProductList()
    {
        $data['products'] = Product::orderBy('id', 'asc')->paginate(10);

        return view('cms.product.list',$data);
    }
    /* // Listar productos
      public function list() {
        $list = Product::orderby('id')->get();
        return view('cms.products', compact('list'));
    } *






    /


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CmsProductCreate()
    {
        return view('cms.product.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);

        Product::create($request->all());
        return Redirect::to('cms.product.list')
       ->with('success','Greate! Product created successfully.');
    }


    /*
    if ($image = $request->file('image')) {
        foreach ($image as $files) {
        $destinationPath = 'public/img/'; // upload path
        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);
        $insert[]['image'] = "$profileImage";
        }
    }

    $check = Image::insert($insert); */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function CmsProductEdit($id)
    {
        $where = array('id' => $id);
        $data['product_info'] = Product::where($where)->first();

        return view('cms.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',

        ]);

        /*
        if ($image = $request->file('image')) {
            foreach ($image as $files) {
            $destinationPath = 'public/img/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert[]['image'] = "$profileImage";
            }
        }

        $check = Image::insert($insert); */

        $update = ['name' => $request->name,'image' => $request->image, 'description' => $request->description, 'price' => $request->price, 'stock' => $request->stock, 'category_id' => $request->category_id, 'brand_id' => $request->brand_id];
        Product::where('id',$id)->update($update);

        return Redirect::to('cms.product.list')
       ->with('success','Great! Product updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();

        return Redirect::to('cms.product.list')->with('success','Product deleted successfully');
    }






    /* // Mostrar vistas
    public function createOrEdit($id = null) {
        $data = [];
        // Si el controlador no recibe un ID, es creación
        if (!$id) {
            $data['title'] = 'Crear';
            return view('cms.products.form', $data);
        }
        $data['title'] = 'Editar';
        $data['product'] = Product::find($id);
        return view('cms.products.form', $data);
    } */

    /* // Almacenar
    public function storeOrUpdate($id = null, Request $request) {
        // First or new nos devuelve un registro existente para editar o una instancia nueva para crear
        $product = Product::firstOrNew(['id' => $id]);
        $product->fill($request->all());
        $product->save();
        return redirect(route('cms.products.list'));
    }


    public function obtenerDesdeClasificacion($tipoEtiqueta) {
        if ($tipoEtiqueta == 'category') {
            $data['isCategpry'] = true;
            $data['list'] = Product::all();
        }
    }

    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //return redirect()->route('/product/'.$id);
        return redirect()->route('/product/'.$id);
    } */
}
