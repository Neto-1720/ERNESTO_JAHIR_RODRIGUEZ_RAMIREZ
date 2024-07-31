 <!--  
 * Esta es la vista de editar producto.
 * 
 * Extiende la plantilla `layouts.app` y define una sección para el contenido.
 * La sección de edit contenido un formulario para editar un producto existente, que incluye un token CSRF.
 * Asi como un include para traer el formulario de edición y asi ahorrar codigo. 
 -->

@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Catalog Product
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar  ') }} Productos</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('products.update', $catalogProduct->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('products.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
