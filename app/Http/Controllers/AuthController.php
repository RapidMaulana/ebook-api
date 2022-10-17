<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 12369420,
            'Nama' => 'S. Maulana Muhammad Rafid',
            'Phone' => '081334206969',
            'Kelas' => 'XII RPL 6'
        ];
    }
}
