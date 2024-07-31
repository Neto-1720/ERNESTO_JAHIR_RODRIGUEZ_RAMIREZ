<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/**
 * Controlador de autenticación de usuarios.
 */
class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * URL a la que se redirigirá al usuario después de un inicio de sesión exitoso.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Crea una nueva instancia del controlador.
     *
     * Este constructor agrega el middleware `guest` a todos los métodos excepto `logout`.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Obtiene el nombre de usuario que se utilizará para autenticar al usuario.
     *
     * Este método devuelve el nombre del campo que se utilizará para autenticar al usuario.
     *en este caso el campo que se utiliza para autenticar es "name".
     * @return string
     */
    public function username()
    {
        return 'name';
    }
}