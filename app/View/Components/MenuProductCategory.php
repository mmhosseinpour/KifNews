<?php

namespace App\View\Components;

use App\Models\ProductCategory;
use Illuminate\View\Component;

class MenuProductCategory extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $productCategories = ProductCategory::all();

        return view('components.menu-product-category',['categories'=>$productCategories]);
    }
}
