<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function getData(Request $request)
    {
        // For demonstration purposes, you can return any data here
        $data = [
            'message' => 'This is some protected data!',
            'user' => $request->user()
        ];

        return response()->json($data);
    }
}
