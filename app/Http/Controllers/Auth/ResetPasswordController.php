<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador es responsable de manejar las solicitudes de restablecimiento de contraseña.
    */

    use ResetsPasswords;

    /**
    * Dónde redirigir a los usuarios después de restablecer su contraseña.
     * @var string
     */
    protected $redirectTo = '/home';
}
