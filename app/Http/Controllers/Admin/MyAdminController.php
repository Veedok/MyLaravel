<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catrgoty;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        $news = News::paginate(5);
        $cat = Catrgoty::all();
        return view('admin.admin', [
            'news' => $news,
            'cat' => $cat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Catrgoty::all();

        return view('admin.create', ['categories' => $cat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $arrayForSql = [];
        // if (array_key_exists('form1', $request->all())) {
        //     // Формируем массив для БД из него исключаем токен и данные картинки т.к. путь к ней мы получим другим способо а в БД нам нужен только путь к картинке
        //     $arrayForSql = $request->except('_token', 'image');
        //     // Получаем путь к картинке и записываем его в массив для MySql
        //     $arrayForSql['imgPath'] = $request->file('image')->store('testImg', 'public');
        //     // Записываем данные массива для БД в файл json
        //     // Storage::disk('public')->put("/text/formNews". time() .".json", json_encode($arrayForSql));
        //     // Проверка
        //     //  dd($arrayForSql['imgPath']);
        //     $addNews = new News();
        //     $addNews->addNews($arrayForSql['title'], $arrayForSql['author'], $arrayForSql['desc'], $arrayForSql['imgPath']);
        // } elseif (array_key_exists('form2', $request->all())) {
        //     $arrayForSql = $request->except('_token');
        //     Storage::disk('public')->put("/text/formContact" . time() . ".json", json_encode($arrayForSql));
        //     return json_encode($arrayForSql);
        // }
        // return json_encode($request->all());
        $arrayForSql = $request->except('_token', 'image', 'form1', 'categories');
        $arrayForSql['imgPath'] = $request->file('image')->store('testImg', 'public');
        $created = News::create($arrayForSql);
        if ($created) {
            foreach ($request->input('categories') as $cat) {
                DB::table('catygory_has_news')->insert([
                    'catigory_id' => intval($cat),
                    'news_id' => $created->id
                ]);
            }
            return redirect()->route('admin.myAdmin.index');
        }
        dump($created);
    }

    /**
     * Display the specified resource.
     *
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  News $myAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(News $myAdmin)
    {
        $cat = Catrgoty::all();
        $selected = DB::table('catygory_has_news')->where('news_id', $myAdmin->id)->get()->map(fn ($item) => $item->catigory_id)->toArray();
        return view('admin.edit', [
            'news' => $myAdmin,
            'categories' => $cat,
            'selected' => $selected
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  News $myAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $myAdmin)
    {
        $arrayForSql = $request->except('_token', 'image', 'form1', 'categories');
        $arrayForSql['imgPath'] = $request->file('image')->store('testImg', 'public');
        $update = $myAdmin->fill($arrayForSql)->save();
        if ($update) {
            DB::table('catygory_has_news')->where('news_id', $myAdmin->id)->delete();
            foreach ($request->input('categories') as $cat) {
                DB::table('catygory_has_news')->insert([
                    'catigory_id' => intval($cat),
                    'news_id' => $myAdmin->id
                ]);
            }
            return redirect()->route('admin.myAdmin.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
