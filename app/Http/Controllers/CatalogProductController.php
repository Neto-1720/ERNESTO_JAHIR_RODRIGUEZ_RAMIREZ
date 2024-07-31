<?php

namespace App\Http\Controllers;

use App\Models\CatalogProduct;
use App\Http\Requests\CatalogProductRequest;

/**
 * Clase CatalogProductController
 * @package App\Http\Controllers
 */
class CatalogProductController extends Controller
{
    /**
     * Función de index para llamar todos los productos que tenemos
     * en la Base de datos.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $catalogProducts = CatalogProduct::paginate();

        return view('products.index', compact('catalogProducts'))
            ->with('i', (request()->input('page', 1) - 1) * $catalogProducts->perPage());
    }

    /**
     * Muestra el formulario para crear un nuevo producto.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $catalogProduct = new CatalogProduct();
        return view('products.create', compact('catalogProduct'));
    }

    /**
     * Almacena un producto en la base de datos.
     *
     * @param CatalogProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CatalogProductRequest $request)
    {   
        CatalogProduct::create($request->validated());

        return redirect()->route('products.index')
            ->with('success', 'Producto creado con éxito.');
    }

    /**
     * Muestra el producto especificado.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {   
        $catalogProduct = CatalogProduct::find($id);

        return view('products.show', compact('catalogProduct'));
    }

    /**
     * Muestra el formulario para editar el producto especificado.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $catalogProduct = CatalogProduct::find($id);

        return view('products.edit', compact('catalogProduct'));
    }

    /**
     * Actualiza el producto especificado en la base de datos.
     *
     * @param int $id
     * @param CatalogProductRequest $request
     * @param CatalogProduct $catalogProduct
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, CatalogProductRequest $request, CatalogProduct $catalogProduct)
    {   
        CatalogProduct::where('id', '=', $id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,
                'height' => $request->height,
                'length' => $request->length,
                'width' => $request->width,
                'photo' => $request->photo,
            ]);

        return redirect()->route('products.index')
            ->with('success', 'Producto actualizado con éxito');
    }

    /**
     * Elimina el producto especificado de la base de datos.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        CatalogProduct::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Producto eliminado con éxito');
    }
}