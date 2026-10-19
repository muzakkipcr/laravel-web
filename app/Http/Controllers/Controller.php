<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Kembalikan respon JSON ke Ajax
        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil dikirim!',
            'data' => [
                'username' => $username
            ]
        ]);
    }
}
