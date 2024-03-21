<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'tulisan' => 'required|string|max:255',
            'pertanyaan_id' => 'required|exists:pertanyaan,id',
            
        ]);

        $user_id = Auth::id();

        // Simpan jawaban ke database
        Jawaban::create([
            'tulisan' => $request->tulisan,
            'pertanyaan_id' => $request->pertanyaan_id,
            'user_id' => $user_id,
        ]);


        
        return redirect('/user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jawaban = Jawaban::find($id);
        return view('user.editJawaban' , compact('jawaban'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
    		'tulisan' => 'required'
    	]);

        $jawaban = Jawaban::find($id);
        $jawaban->tulisan = $request->tulisan;
        $jawaban->update();
        
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jawaban = Jawaban::find($id);
        $jawaban->delete();
        return redirect('/user');
    }
}
