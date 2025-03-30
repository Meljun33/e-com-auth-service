<?php

namespace App\Http\Middleware;


use Iluminate\Foundation\Http\Middleware\verityCsrfToken as Middleware;


class VerifyCsrfToken extends Middleware
{
  protected $except = [
    'api/+'

  ];
    
}
