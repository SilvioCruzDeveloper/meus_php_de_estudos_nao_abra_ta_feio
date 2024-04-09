<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function teste()
    {
        $data = [
            'name' => 'Jocelim',
            'dataNacimento' => '12/12/1986'
        ];
        return view('teste', $data);
    }
}
