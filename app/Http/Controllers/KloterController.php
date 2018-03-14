<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kloter;
use App\Pembimbing;
use Session;

class KloterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Kloter::all();
        return view('kloter.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $pembimbing = Pembimbing::all();
        return view('kloter.create',compact('pembimbing'));
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
            'No_kloter' => 'required|',
            'id_pembimbing' => 'required'
        ]);
        $a = new Kloter;
        $a->No_kloter = $request->No_kloter;
        $a->id_pembimbing = $request->id_pembimbing;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$a->nama</b>"
        ]);
        return redirect()->route('kloters.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $a = Kloter::findOrFail($id);
        return view('kloter.show',compact('a'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Kloter::findOrFail($id);
        $pembimbing = Pembimbing::all();
        $selectedPembimbing = Kloter::findOrFail($id)->id_pembimbing;
        return view('kloter.edit',compact('a','pembimbing','selectedPembimbing'));
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
            'No_kloter' => 'required|',
            'id_pembimbing' => 'required'
        ]);
        $a = Kloter::findOrFail($id);
        $a->No_kloter = $request->No_kloter;
        $a->id_pembimbing = $request->id_pembimbing;
        $a->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$a->nama</b>"
        ]);
        return redirect()->route('kloters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $a = Kloter::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('kloters.index');
    }
}
