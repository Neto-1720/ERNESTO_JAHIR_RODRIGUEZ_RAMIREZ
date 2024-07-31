 <!--  
 Est este el es formulario base, que se utiliza en el create y en el edit de los produtos, ayuda a ahrrar codigo
 asi mismo es mas facil manejar la informacion y ayuda con la productividad desde esta vista se manda a llamar con los include.
 -->
        <div class="form-group">
            {!! Form::label('name', 'Nombre', array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name', $catalogProduct?->name) }}" id="name" placeholder="Ingresar Nombre">
                {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>')
                !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Descripción', array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                    value="{{ old('description', $catalogProduct?->description) }}" id="description"
                    placeholder="Ingresar Descripción">
                {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong>
                </div>') !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('height', 'Altura:', array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                <input type="text" name="height" class="form-control @error('height') is-invalid @enderror"
                    value="{{ old('height', $catalogProduct?->height) }}" id="height" placeholder="Ingresar Altura">
                {!! $errors->first('height', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>
                ') !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('length', 'Longitud:', array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                <input type="text" name="length" class="form-control @error('length') is-invalid @enderror"
                    value="{{ old('length', $catalogProduct?->length) }}" id="length" placeholder="Ingresar Longitud">
                {!! $errors->first('length', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>
                ') !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('width', 'Ancho:', array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-4">
                <input type="text" name="width" class="form-control @error('width') is-invalid @enderror"
                    value="{{ old('width', $catalogProduct?->width) }}" id="width" placeholder="Ingresar Ancho">
                {!! $errors->first('width', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>
                ') !!}
            </div>
        </div>

        <div class="form-group">
            <label for="photo" class="form-label">{{ __('Foto') }}</label>
            <div class="col-sm-4">
            <input type="text" name="photo" class="form-control @error('photo') is-invalid @enderror"
                value="{{ old('photo', $catalogProduct?->photo) }}" id="photo" placeholder="Ingresar Foto">
            {!! $errors->first('photo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>')
            !!}
             </div>
        </div>
        <br><br>
        <div class="form-group">
            <button type="submit" class="btn btn-success">{{ __('Guardar') }}</button>
        </div>
