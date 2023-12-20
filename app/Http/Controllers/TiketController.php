<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index(){
        $tiket = tiket::all();
        return view('tiket.index',compact(['tiket']));
    }

    public function create()
    {
        return view('tiket.create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        tiket::create($request->all());
        return redirect('/tiket');
    }

    public function edit($id)
    {
        $tiket = Tiket::find($id);
        return view('tiket.edit',compact(['tiket']));
    }

    public function update($id, Request $request)
    {
        $tiket = Tiket::find($id);
        $tiket->update($request->except(['_token','submit']));
        return redirect('/tiket');
    }

    public function destroy($id)
    {
        $tiket = Tiket::find($id);
        $tiket->delete();
        return redirect('/tiket');
    }
}
