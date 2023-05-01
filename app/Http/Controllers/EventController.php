<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = 'Jonas';
        $idade = 19;
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'arr' => $arr,
            ]
        );
    }

    public function create()
    {
        return view('events.create');
    }

}
