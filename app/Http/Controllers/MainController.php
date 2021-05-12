<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function index() {
        $products = Product::get();
        return view('index', compact('products'));
    }
    
    public function categories() {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }
    
    public function category($slug) {
        $category = Category::where('slug', $slug)->first();
        // $products = Product::where('category_id', $category->id)->get();
        $categories = Category::get();
        return view('category', compact( 'category', 'categories'));
    }
    
    public function product($category, $product_name = null) {
        // dump($product_name);
        // dd($product_name);
        $categories = Category::get();
        return view('product', compact( 'categories'));
    }
    
}
