<?php

namespace App\Http\Controllers\Market;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Product;
use App\ViewModel\Home\ItemBoxVM;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Collection;

class HomeController extends Controller
{
    // Website Index page
    public function Index()
    {
        return view('Market.index');
    }

    public function search(Request $request)
    {

        $key = $request['key'];

        //pagination variable
        $page = request('page');
        $take = request('take');

        //init list
        $items = ["imageUrl", "category", "title", "price", "view", "link", "id"];

        //Default page
        if ($page == null)
            $page = 1;

        //default take
        if ($take == null)
            $take = 3;

#TODO Search box
        if ($request['key'] !== null) {
            switch ($request->category) {
                case 0:
                    //pagination
                    $count = Article::all()->count();
                    $pageCount = $count / $take;
                    if ($count % $take !== 0)
                        $pageCount++;

                    //Run order - pagination Query
                    $articles = Article::where('title', $key)->get()->skip(($page - 1) * $take)->take($take);
                    foreach ($articles as $article) {
                        $items = "";

//                        array_add($items,
//                            ["imageUrl", "category", "title", "price", "view", "link", "id"],
//                            ["/assets/images/marketplace/blog/4.jpg", "none", $article->title, 0, $article->visit, '/blog/' . $article->id, $article->id]);
                    }
                    //return items
                    return view('Market.search', ['item' => $articles]);
                    break;
                case 1:

                    //pagination
                    $count = Product::all()->count();
                    $pageCount = $count / $take;
                    if ($count % $take !== 0)
                        $pageCount++;

                    $products = Product::where('title', 'LIKE', $key)->get()->skip(($page - 1) * $take)->take($take);

                    //return items
                    return view('Market.search', ['item' => $products]);
                    break;
                default :
                    //pagination
                    $count = Article::all()->count();
                    $pageCount = $count / $take;
                    if ($count % $take !== 0)
                        $pageCount++;

                    //Run order - pagination Query
                    $articles = Article::where('title', $key)->get()->skip(($page - 1) * $take)->take($take);
                    foreach ($articles as $article) {
                        $items = [];

                        array_add($items,
                            ["imageUrl", "category", "title", "price", "view", "link", "id"],
                            ["/assets/images/marketplace/blog/4.jpg", $article->GetCategory, $article->title, 0, $article->visit, '/blog/' . $article->id, $article->id]);
                    }
                    dd($items);
                    break;
            }
        }
    }

}
