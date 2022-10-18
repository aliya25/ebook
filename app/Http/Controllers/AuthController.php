<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120172,
            'Name' => 'Aliya',
            'Phone' => '081212970902',
            'Class' => 'XII RPL 5'
        ];
    }
}

