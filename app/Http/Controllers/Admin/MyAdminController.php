<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\UpdateRequest;
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
        $news = News::with('categoriNews')->paginate(10);
        return view('admin.admin', [
            'news' => $news,
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
        $arrayForSql = $request->except('_token', 'image', 'form1', 'categories');
        $arrayForSql['imgPath'] = $request->file('image')->store('testImg', 'public');
        $created = News::create($arrayForSql);
        if ($created) {
            foreach ($request->input('categories') as $cat) {
                $created->categoriNews()->attach($cat);
            }
            return redirect()->route('admin.myAdmin.index');
        }
        dump($created);
    }

    /**
     * Display the specified resource.
     *
     * @param  News $myAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(News $myAdmin)
    {

       return view('singleNews', ['news' => $myAdmin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  News $myAdmin
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, News $myAdmin)
    {
        $r = $request->header('referer');
        $cat = Catrgoty::all();
        $selected = DB::table('catygory_has_news')->where('news_id', $myAdmin->id)->get()->map(fn ($item) => $item->catigory_id)->toArray();
        return view('admin.edit', [
            'news' => $myAdmin,
            'categories' => $cat,
            'selected' => $selected,
            'r' => $r
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest $request
     * @param  News $myAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, News $myAdmin)
    {
        $arrayForSql = $request->except('_token', 'image', 'form1', 'categories');
        if ($request->image) {
            $arrayForSql['imgPath'] = $request->file('image')->store('testImg', 'public');
        }
        $update = $myAdmin->fill($arrayForSql)->save();
        if ($update) {

            if ($request->categories) {
                $myAdmin->categoriNews()->detach($myAdmin->categories);
                foreach ($request->input('categories') as $cat) {
                    $myAdmin->categoriNews()->attach($cat);
                }
            }
            return redirect($request->form1);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  News $myAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $myAdmin)
    {
        try {
            $myAdmin->delete();
            return response()->json('ok');
        } catch (\Exception $th) {
            return response()->json('error', 400);
        }
    }
}
