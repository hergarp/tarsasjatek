<?php

namespace App\Http\Controllers;

use App\Models\Tarsasjatek;
use Illuminate\Http\Request;

class TarsasjatekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tasasjatek::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarsasjatek.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarsasjatek = new tarsasjatek();
        $tarsasjatek->name = $request->name;
        $tarsasjatek->szemely = $request->szemely;
        $tarsasjatek->ar = $request->ar;
        $tarsasjatek->leiras = $request->leiras;
        $tarsasjatek->save();

        return redirect('/tarsasjatek/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarsasjatek  $tarsasjatek
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Tarsasjatek::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarsasjatek  $tarsasjatek
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarsasjatek = Tarsasjatek::find($id);
        return view('tarsasjatek.edit', ['tarsasjatek' => $tarsasjatek]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarsasjatek  $tarsasjatek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarsasjatek = Tarsasjatek::find($id);
        $tarsasjatek->name = $request->name;
        $tarsasjatek->szemely = $request->szemely;
        $tarsasjatek->ar = $request->ar;
        $tarsasjatek->leiras = $request->leiras;
        $tarsasjatek->save();

        return redirect('/tarsasjatek/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarsasjatek  $tarsasjatek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tarsasjatek::find($id)->delete();
        return redirect('/tarsasjatek/list');
    }
    public function list()
    {
        $tarsasjateks = Tarsasjatek::all();
        return view('tarsasjatek.list', ['tarsasjateks' => $tarsasjateks]);
    }
}
