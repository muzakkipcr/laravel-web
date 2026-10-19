<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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
=======
abstract class Controller
{
    //
>>>>>>> 5c211815a167eb8adb30eac4f9061f571e00a4a8
}
