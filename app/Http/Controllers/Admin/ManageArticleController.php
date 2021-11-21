<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManageArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //order by
        $orderby = request('orderby');

        //pagination variable
        $page = request('page');
        $take = request('take');

        if ($orderby == null) {
            $orderby = "id";
        }
        //Default page
        if ($page == null)
            $page = 1;

        //default take
        if ($take == null)
            $take = 3;

        //Run order - pagination Query
        $articles = Article::all()->sortByDesc($orderby)->skip(($page - 1) * $take)->take($take);
        //pagination
        $count = Article::all()->count();
        $pageCount = $count / $take;
        if ($count % $take !== 0)
            $pageCount++;

        return view('admin.Article.Index', ['articles' => $articles, 'count' => $pageCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Storage::disk('local')->put('\img', $request['img']);

        Article::create([
                'title' => $request['title'],
                'slug' => $request['slug'],
                'content' => $request['content'],
                'categoryId' => $request['parentId'],
                'visit' => 0]
        );

        return redirect('/admin/ManageArticle');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        $article->visit = $article->visit + 1;

        $article->save();

        return view('admin.Article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.Article.edit', ['article' => Article::find($id)]);
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
        $article = Article::find($id);

        $article->title = $request['title'];
        $article->content = $request['content'];
        $article->slug = $request['slug'];
        $article->categoryId = $request['parentId'];

        $article->save();

        return redirect('/admin/ManageArticle');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('/admin/ManageArticle');
    }
}
