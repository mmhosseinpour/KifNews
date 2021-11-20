<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderby = request('orderby');
        if ($orderby == null)
            $orderby = "id";
        $article= ArticleCategory::all()->sortByDesc($orderby);
        return view('admin.Article.Category.index', ["categories" => $article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Article.Category.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//Storage::disk('local')->put('/img/', $request['img']);

        ArticleCategory::create([
            'title' => $request['title'],
            'parentId' => $request['parentId'],
            'article_category_galleryId' => 0
        ]);

        return redirect('/admin/ManageArticleCategory/');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(ArticleCategory::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.Article.Category.edit', ['item' => ArticleCategory::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articleCategory = ArticleCategory::find($id);
        $articleCategory->title = $request['title'];
        $articleCategory->parentId = $request['parentId'];

        $articleCategory->save();

        return redirect('/admin/ManageArticleCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articleCategory = ArticleCategory::find($id);
        $articleCategory->delete();

        return redirect('/admin/ManageArticleCategory');
    }
}
