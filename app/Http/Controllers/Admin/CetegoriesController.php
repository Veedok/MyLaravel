<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catrgoty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CetegoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Catrgoty::paginate(10);
        return view("admin.categori", ['cat' => $cat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addcat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Catrgoty::create($request->only('catigory'));
        return redirect('admin/cat');
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
     *@param  \Illuminate\Http\Request  $request
     * @param  Catrgoty $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Request  $request, Catrgoty $cat)
    {
        $r = $request->header('referer');
        return view('admin.editcat', [
            'cat' => $cat,
            'r' => $r
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Catrgoty $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catrgoty $cat)
    {
        // dd($request->form1);
        $cat->fill($request->only('catigory'))->save();
        return redirect($request->form1);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Catrgoty $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catrgoty $cat)
    {
        try {
            $cat->delete();
            return response()->json('ok');
        } catch (\Exception $th) {
            return response()->json('error', 400);
        }
    }
}
