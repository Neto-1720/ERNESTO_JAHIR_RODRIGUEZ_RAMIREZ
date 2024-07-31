
 <!--  
 Este es el index de los productos desde esta vista se puede vizualizar los pruductos en la base de datos.
 Asi como la creación de nuevos productos, editar, eliminar y ver.
 -->
 @extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
         <!-- Boton para agregar un registro-->
        <div class="col-sm-12">
            <div class="float-right">
                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right"
                    data-placement="left">
                    {{ __('Nuevo Producto') }}
                </a>
            </div>
             <!-- If para el manejo de alertas, que le avisaran al cliente si se hizo el cambio, registro, eliminacion
                de manera exitosa.-->
            @if ($message = Session::get('success'))
            <div class="alert alert-success m-4">
                <p>{{ $message }}</p>
            </div>
            @endif
            <br>
            <br>
            <br>
             <!-- Tabla de productos-->
                <div class="table-responsive">
                    <table id="TableProducts" class="table table-striped table-hover">
                        <thead class="thead">
                            <tr>
                                <th style="display:none;">Id</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Altura</th>
                                <th>Longitud</th>
                                <th>Ancho </th>
                                <th style="display:none;">Foto</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($catalogProducts as $product)
                            <tr>
                                <td style="display:none;"> {{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->height }} cm</td>
                                <td>{{ $product->length }} cm</td>
                                <td>{{ $product->width }} cm</td>
                                <td style="display:none;">{{ $product->photo }} </td>

                                <td>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary "
                                            href="{{ route('products.show',$product->id) }}"><i
                                                class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('products.edit',$product->id) }}"><i
                                                class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
        {!! $catalogProducts->links() !!}
    </div>
</div>
@endsection
