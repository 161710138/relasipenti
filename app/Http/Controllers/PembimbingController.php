<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembimbing;
use Session;

class PembimbingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $a = Pembimbing::all();
        return view('pembimbing.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('pembimbing.ceate');
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
            'Nama_pembimbing' => 'required|',
            'Jenis_kelamin' => 'required|',
            'Tempat_lahir' => 'required|',
            'Tanggal_lahir' => 'required|',
            'Alamat' => 'required|'

        ]);
        $a = new Pembimbing;
        $a->Nama_pembimbing= $request->Nama_pembimbing;
        $a->Jenis_kelamin= $request->Jenis_kelamin;
        $a->Tempat_lahir= $request->Tempat_lahir;
        $a->Tanggal_lahir= $request->Tanggal_lahir;
        $a->Alamat= $request->Alamat;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$a->nama</b>"
        ]);
        return redirect()->route('pembimbings.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $a = Pembimbing::findOrFail($id);
        return view('pembimbing.show',compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Pembimbing::findOrFail($id);
        return view('pembimbing.edit',compact('a'));
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
            'Nama_pembimbing' => 'required|',
            'Jenis_kelamin' => 'required|',
            'Tempat_lahir' => 'required|',
            'Tanggal_lahir' => 'required|',
            'Alamat' => 'required|'

        ]);
        $a = Pembimbing::findOrFail($id);
        $a->Nama_pembimbing= $request->Nama_pembimbing;
        $a->Jenis_kelamin= $request->Jenis_kelamin;
        $a->Tempat_lahir= $request->Tempat_lahir;
        $a->Tanggal_lahir= $request->Tanggal_lahir;
        $a->Alamat= $request->Alamat;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$a->nama</b>"
        ]);
        return redirect()->route('pembimbings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $a = Pembimbing::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('pembimbings.index');
    }
}
