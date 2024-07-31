<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador maneja el registro de nuevos usuarios así como su
    | validación y creación.
    */

    use RegistersUsers;

    /**
     * Dónde redirigir a las usuarias después del registro, en este caso "home".
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Crear una nueva instancia de controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Obtener un validador para una solicitud de registro Nueva.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:10', 'max:15'],
            'img_profile' => ['required', 'image', 'max:2048'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Cree un usuario después de una solicitud de registro válida.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
{   
    // Manejo del archivo de imagen en la creacion del usuario.
    $imagePath = null;
    if (isset($data['img_profile'])) {
        $imagePath = $data['img_profile']->store('img/users');
    }

    return User::create([
        'name' => $data['name'],
        'phone' => $data['phone'],
        'img_profile' => $imagePath,
        'password' => Hash::make($data['password']),
    ]);

    }
}
