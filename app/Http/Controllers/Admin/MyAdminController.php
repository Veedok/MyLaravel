<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function GuzzleHttp\json_decode;

class MyAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => ['required', 'string' , 'min:10'],
        //     'desc' => ['string' , 'min:100'],
        //     'author' => ['string' , 'min:10']
        // ]);
        $arrayForSql = [];
        // Тут формируем и дописываем в массив дату время в формате MySql
        date_default_timezone_set("Europe/Moscow");
        $arrayForSql['publicationDdate'] = date("Y-m-d H:i:s");
        if (array_key_exists('form1', $request->all())) {
            // Формируем массив для БД из него исключаем токен и данные картинки т.к. путь к ней мы получим другим способо а в БД нам нужен только путь к картинке
            $arrayForSql = $request->except('_token', 'image');
            // Получаем путь к картинке и записываем его в массив для MySql
            $arrayForSql['imgPath'] = $request->file('image')->store('testImg', 'public');
            // Записываем данные массива для БД в файл json
            Storage::disk('public')->put("/text/formNews". time() .".json", json_encode($arrayForSql));
            // Проверка
            dd($arrayForSql);
        } elseif(array_key_exists('form2', $request->all())) {
            $arrayForSql = $request->except('_token');
            Storage::disk('public')->put("/text/formContact". time() .".json", json_encode($arrayForSql));
            return json_encode($arrayForSql);
        }
        return json_encode($request->all());

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
