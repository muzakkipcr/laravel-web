<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
<<<<<<< HEAD

=======
>>>>>>> 5c211815a167eb8adb30eac4f9061f571e00a4a8
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
<<<<<<< HEAD
		    'nama'  => 'required|max:10',
		    'email' => ['required','email'],
		    'pertanyaan' => 'required|max:300|min:8',
        ],[
            'nama'  => 'required|max:10',
		    'email' => ['required','email'],
		    'pertanyaan' => 'required|max:300|min:8',
		]);


=======
            'nama' => 'required | max: 10',
            'email' => ['required', 'email'],
            'pertanyaan' => 'required|max: 300|min:8',
        ],[
            'nama.required' => 'Nama tidak boleh kosong',
            'email.email' => 'Email Tidak valid'
        ]);

        $data['nama']       = $request->nama;
        $data['email']      = $request->email;
        $data['pertanyaan'] = $request->pertanyaan;

        return view('home-question-respon', $data);
        return redirect()->route('home')->with('info', 'Pertanyaan anda berhasil dikirim!');
>>>>>>> 5c211815a167eb8adb30eac4f9061f571e00a4a8
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
