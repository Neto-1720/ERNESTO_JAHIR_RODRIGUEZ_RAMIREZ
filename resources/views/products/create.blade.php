 <!--  
 * Esta es una plantilla Blade para crear un nuevo producto.
 * 
 * Extiende la plantilla `layouts.app` y define una sección para el contenido.
 * La sección de contenido contiene un formulario para crear un nuevo producto, que incluye un token CSRF y codificación multipart/form-data.
 * Asi como un include para traer el formulario de creacion y asi ahorrar codigo. 
 -->
@extends('layouts.app')
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('products.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('products.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/validate-products.js"></script>
@endsection