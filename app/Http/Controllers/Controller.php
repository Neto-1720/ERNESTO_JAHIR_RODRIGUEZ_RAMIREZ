<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * Clase base para los controladores de la aplicación.
 *
 * Esta clase proporciona una implementación básica de un controlador en Laravel.
 * Utiliza las características de los traits `AuthorizesRequests` y `ValidatesRequests`
 * para proporcionar funcionalidad para autorizar y validar las solicitudes entrantes.
 *
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}