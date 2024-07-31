  <!-- Formulario de registro al cual se le hace un apunte mediente un include
        en la vista de login.-->   
    <div class="">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
            placeholder="Nombre:">
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="">
        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required placeholder="Telefono:">
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="">
        <input id="img_profile" type="file" class="form-control @error('img_profile') is-invalid @enderror" name="img_profile" required placeholder="Img:">
        @error('img_profile')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña:">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña:">
    </div>

    <button type="submit" class="">
        {{ __('Register') }}
    </button>