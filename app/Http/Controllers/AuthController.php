<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119142,
        'name' => 'Nurul Haliza',
        'gender' => 'Female',
        'phone' => '085701760620',
        'class' => 'XII RPL 5'];
  }
}
