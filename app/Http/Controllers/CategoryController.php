<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use App\ProductModel;


class CategoryController extends Controller {

    /** FRONT END */
    /* Listar productos de Categoria */
    public function show($id = null) {

        $list = [];
        $list['products'] = ProductModel::orderby('name')->where('category_id', $id)->get();

        dd($list);

        return view('category', $list);

        /*$category->setRelation('products', $category->products()->paginate(10));
        return $this->showOnePaginate($category, 10);*/

    }

    /** BACK END */
    // Listar categories
    public function list() {
        $list = CategoryModel::orderby('id')->get();
        return view('cms.categories', compact('list'));
    }

    // Editor Categoría
    public function createOrEdit($id = null) {
        $data = [];
        // Si el controlador no recibe un ID, es creación
        if (!$id) {
            $data['title'] = 'Crear';
            return view('cms.categories.form', $data);
        }

        $data['title'] = 'Editar';
        $data['category'] = Category::find($id);
        return view('cms.categories.form', $data);
    }

    // Almacenar
    public function storeOrUpdate($id = null, Request $request) {
        // First or new nos devuelve un registro existente para editar o una instancia nueva para crear
        $category = Category::firstOrNew(['id' => $id]);
        $category->fill($request->all());
        $category->save();
        return redirect(route('cms.categories.list'));
    }


}
