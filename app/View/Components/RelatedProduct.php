<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class RelatedProduct extends Component
{
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $products = Product::query()->where('categoryId', '=', $this->id)->take(8)->get();
        return view('components.related-product', ['items' => $products]);
    }
}
