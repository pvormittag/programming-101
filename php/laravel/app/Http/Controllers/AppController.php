<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AppController extends Controller
{
    /**
     * Undocumented function
     *
     * @param Request $request
     * @param string $name
     * @return mixed
     */
    public function greet(Request $request)
    {
        return view('greet', [
            'name' => $request->get('name', 'Stranger'),
            'gender' => $request->get('gender', '')
        ]);
    }
}
