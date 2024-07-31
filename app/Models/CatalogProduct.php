<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Clase CatalogProduct
 *
 * Representa un producto en el catálogo.
 */
class CatalogProduct extends Model
{
    /**
     * Número de elementos a mostrar por página.
     *
     * @var int
     */
    protected $perPage = 20;

    /**
     * Atributos que se pueden asignar en la creación, edición etc.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'height', 'length', 'width', 'photo']; 
}