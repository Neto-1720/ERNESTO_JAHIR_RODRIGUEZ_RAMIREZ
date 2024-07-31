 <!-- Esta es la vissta de show, manda una vizualización de el producto, sin necesidad de editar,
    y muestra el producto en una vista de lista, con un boton para regresar al index
 -->
@extends('layouts.app')

@section('content')
<section class="content container-fluid">

    <div class="col-md-12">
        <div class="float-right">
            <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"> {{ __('Salir') }}</a>
        </div>
    </div>
    <br><br>
    <div class="form-group">
        {!! Form::label('name', 'Nombre:', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-4">
            <input type="text" name="name" class="form-control" id="name"  value="{{ $catalogProduct->name }}" placeholder="" readonly>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Descripción:', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-4">
            <input type="text" name="description" class="form-control" id="description"  value="{{ $catalogProduct->description }}" placeholder="" readonly>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('height', 'Altura:', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-4">
            <input type="text" name="height" class="form-control" id="height"  value="{{ $catalogProduct->height }}" placeholder="" readonly>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('length', 'Longitud:', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-4">
            <input type="text" name="length" class="form-control" id="length"  value="{{ $catalogProduct->length }}" placeholder="" readonly>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('width', 'Ancho:', array('class' => 'col-sm-2 control-label')) !!}
        <div class="col-sm-4">
            <input type="text" name="width" class="form-control" id="width"  value="{{ $catalogProduct->width }}" placeholder="" readonly>
        </div>
    </div>
    
    <div class="form-group">
        <label for="photo" class="form-label">{{ __('Precio:') }}</label>
        <div class="col-sm-4">
            <input type="text" name="photo" class="form-control" id="photo"  value="{{ $catalogProduct->photo }}" placeholder="" readonly>
         </div>
    </div>
</section>   
@endsection
