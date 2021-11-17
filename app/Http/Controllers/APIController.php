<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function index()
    {
        $rep = Http::get('https://jsonplaceholder.typicode.com/posts');

        return view(
            'ApiView.index',
            [
                'data' => $rep->json()
            ]
        );
    }
}
