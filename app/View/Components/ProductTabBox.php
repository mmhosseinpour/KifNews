<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class ProductTabBox extends Component
{
    public $categoryId;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        if ($this->categoryId == 0) {
            $products = Product::all()->take(8);
            return view('components.product-tab-box', ['products' => $products]);
        }

        //get products
        $products = Product::query()->where('categoryId', '=', $this->categoryId)->take(8)->get();

        //return products
        return view('components.product-tab-box', ['products' => $products]);
    }
}
