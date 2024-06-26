<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function hello()
    {
        return response()->json(['message' => 'Hello, World!']);
    }

    public function echo(Request $request)
    {
        return response()->json(['message' => 'You sent: ' . $request->input('message')]);
    }
}
