<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PertanyaanController extends Controller
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
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'tulisan' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',  
            'kategori_id' => 'required',  
    	]);

        $user_id = Auth::id();
 
        Pertanyaan::create([
    		'tulisan' => $request->tulisan,
            'gambar' => $request->gambar,
    		'kategori_id' => $request->kategori_id,
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
           // Mengambil pertanyaan beserta jawabannya
           $pertanyaan = Pertanyaan::with('jawaban')->find($id);

           // Memuat tampilan dan meneruskan data pertanyaan ke tampilan
           return view('pertanyaan.detail', compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('user.editPertanyaan' , compact('pertanyaan'));
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

        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->tulisan = $request->tulisan;
        $pertanyaan->update();
        
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
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete();
        return redirect('/user');
    }


}
