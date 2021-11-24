<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\ProductCategory;

class ProductTab extends Component
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
        //GetAll Categories
        $categories = ProductCategory::all()->take(4);

        //Return Item
        return view('components.product-tab', ['categories' => $categories]);
    }
}
