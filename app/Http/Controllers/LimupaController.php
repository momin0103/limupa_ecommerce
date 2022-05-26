<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LimupaController extends Controller
{
    private $categories;
    private $trendding_products;
    private $product;
    private $products;

    public function index()
    {
        $this->categories = Category::orderBy('id', 'desc')->take(12)->get();
        $this->trendding_products = Product::orderBy('id', 'desc')->take(12)->get();
        return view('front.home.home', [
            'featured_categories' => $this->categories,
            'trendding_products' => $this->trendding_products
        ]);
    }

    public function categoryProduct($id)
    {
        $this->products = Product::where('category_id', $id)->orderBy('id', 'desc')->get();
        return view('front.category.category-product', ['products' => $this->products]);
    }

    public function subCategoryProduct($id)
    {
        $this->products = Product::where('sub_category_id', $id)->orderBy('id', 'desc')->get();
        return view('front.category.category-product', ['products' => $this->products ]);
    }

    public function productDetail($id)
    {
        $this->product = Product::find($id);
        return view('front.product.detail', ['product' => $this->product]);
    }
}
