<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador es responsable de manejar las confirmaciones de contraseña y
    | utiliza un rasgo simple para incluir el comportamiento. Eres libre de explorar
    | este rasgo y anular cualquier función que requiera personalización.
    |
    */

    use ConfirmsPasswords;

    /**
     * Dónde redirigir a los usuarios cuando falla la url prevista.
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
        $this->middleware('auth');
    }
}
