<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IdentitasJemaah;
use App\Kloter;
use Session;

class IdentitasJemaahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
         $a = IdentitasJemaah::with('Kloter')->get();
        return view('identitasjemaah.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = Kloter::all();
        return view('identitasjemaah.create',compact('a'));
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
            'Jemaah' => 'required|',
             'asal_jemaah' => 'required|',
            'id_kloter' => 'required'
        ]);
        $a = new IdentitasJemaah;
        $a->Jemaah = $request->Jemaah;
        $a->asal_jemaah = $request->asal_jemaah;
        $a->id_kloter = $request->id_kloter;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$a->nama</b>"
        ]);
        return redirect()->route('identitasjemaahs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = IdentitasJemaah::findOrFail($id);
        return view('identitasjemaah.show',compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = IdentitasJemaah::findOrFail($id);
        $kloter = Kloter::all();
        $selectedKloter = IdentitasJemaah::findOrFail($id)->id_kloter;
        return view('identitasjemaah.edit',compact('a','kloter','selectedKloter'));
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
            'Jemaah' => 'required|',
             'asal_jemaah' => 'required|',
            'id_kloter' => 'required'
        ]);
        $a = IdentitasJemaah::findOrFail($id);
        $a->Jemaah = $request->Jemaah;
        $a->asal_jemaah = $request->asal_jemaah;
        $a->id_kloter = $request->id_kloter;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$a->nama</b>"
        ]);
        return redirect()->route('identitasjemaahs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = IdentitasJemaah::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('identitasjemaahs.index');
    }
}
