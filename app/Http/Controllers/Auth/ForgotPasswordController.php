<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador es responsable de manejar los correos electrónicos de restablecimiento de contraseña y
    |  que ayuda a enviar estas notificaciones desde
    | su aplicación a sus usuarios.
    |
    */

    use SendsPasswordResetEmails;
}
